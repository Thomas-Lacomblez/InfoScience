<?php

namespace App\Controller;

use App\Repository\ArticlesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Articles;
use App\Entity\Commentaires;
use App\Entity\Utilisateurs;
use App\Form\CommentType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\HttpFoundation\Cookie;
class InfoScienceController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request)
    {

       if(!$request->cookies->get('Shown'))
       {
           $shown = new Cookie("Shown",true,time()+3600*24*30,'/',null,false,true);
           $response = new Response();
           $response->headers->setCookie($shown);
           $response->send();
       }
       else
       {
           $shown = false;
       }
        return $this->render('info_science/index.html.twig', [
                'shown' => $shown
            ]);
    }

    /**
     * @Route("/articles/{id?}", name="article", methods={"POST", "GET"})
     */
    public function articles(Articles $article, Request $request, ObjectManager $manager)
    {
        $commentaires = new Commentaires();

        $form = $this->createForm(CommentType::class, $commentaires);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $commentaires->setUserPoster($this->getUser());
            $commentaires->setArticleLier($article);
            $commentaires->setDateP(new \DateTime("now"));
            $manager->persist($commentaires);
            $manager->flush();

            return $this->redirectToRoute('article', ['id' => $article->getId()]);
        }

        return $this->render('info_science/articles.html.twig', [
            'article' => $article,
            'commentForm' => $form->createView()
        ]);
    }

    /**
     * @route("listcommentaire/{id}", name="listcommentaire")
     */
    public function commentairesArticle($id)
    {
        $commentaires = $this->getDoctrine()->getManager()->getRepository(Commentaires::class)->findBy(["Lier" => $id]);


            return $this->render('info_science/commentaires.html.twig', [
            'commentaires' => $commentaires,
        ]);
    }


    /**
     * @Route("/page/{page}", name="pageIndex")
     */
    public function page($page)
    {
        $repo = $this->getDoctrine()->getRepository(Articles::class);
        switch ($page) {
            case 'Science':
                $articles = $repo->findBy(
                    array('idtheme' => 1),
                    array('publication' => 'DESC'));
                $libelleTheme = "Science";
                break;
            case 'technologie':
                $articles = $repo->findBy(
                    array('idtheme' => 2),
                    array('publication' => 'DESC'));
                $libelleTheme = "Technology";
                break;
            default:
                $articles = '';
                break;
        }
        return $this->render('info_science/index.html.twig', [
            'ListArticles' => $articles,
            'Theme' => $libelleTheme
        ]);

    }

    public function searchBar()
    {
        $searchBar = $this->createFormBuilder(null)
            ->add('search', TextType::class)
            ->getForm();

        return $this->render('info_science/searchBar.html.twig', [
            'searchBar' => $searchBar->createView()
        ]);
    }

    // function call in my ajax code to get the articles I search

    /**
     * @Route("/handleSearch/{_query?}", name="handle_search", methods={"POST", "GET"})
     */
    public function handleSearchRequest(Request $request, $_query)
    {
        $em = $this->getDoctrine()->getManager();
        if ($_query)
        {
            $data = $em->getRepository(Articles::class)->findLike($_query);
        }
        // iterate over all the resuls and 'inject' the image inside
        /* for ($index = 0; $index < count($data); $index++)
         {
             $object = $data[$index];
             // http://via.placeholder.com/35/0000FF/ffffff
             //$object->setImage("http://via.placeholder.com/35/0000FF/ffffff");
         }*/
        // setting up the serializer
        $normalizers = [
            new ObjectNormalizer()
        ];
        $encoders =  [
            new JsonEncoder()
        ];
        $serializer = new Serializer($normalizers, $encoders);
        $data = $serializer->serialize($data, 'json');
        return new JsonResponse($data, 200, [], true);
    }
}
