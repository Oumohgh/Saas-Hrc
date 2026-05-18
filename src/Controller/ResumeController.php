<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\HttpCache\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Flex\Response as FlexResponse;

class ResumeController extends AbstractController{

#[Route('/api/resume')]
public function getCollection(){}

return new Response(json_encode())
}


?>
