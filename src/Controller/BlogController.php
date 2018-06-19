<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class BlogController extends Controller {
	public function list($page) {

	}

	public function show($slug) {
		// /blog/my-blog-post
        $url = $this->generateUrl(
            'blog_show',
            array('slug' => 'my-blog-post'),
            UrlGeneratorInterface::ABSOLUTE_URL
        );
	}
}