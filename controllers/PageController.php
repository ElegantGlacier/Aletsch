<?php
namespace Controllers;

use ElegantGlacier\ElegantGlacier;

class PageController {

    public function index() {
        $pages = ElegantGlacier::getPosts([
            'post_type' => 'page',
            'posts_per_page' => 10
        ]);

        ElegantGlacier::render('pages.twig', ['pages' => $pages]);
    }


    public function show($id) {
        $page = get_post($id);
        if ($page && $page->post_type == 'page') {
            ElegantGlacier::render('singlePage.twig', [
                'title' => $page->post_title,
                'content' => $page->post_content,
                'page' => $page
            ]);
        } else {
            ElegantGlacier::render('/templates/404.twig', ['message' => 'Page not found']);
        }
    }
}
