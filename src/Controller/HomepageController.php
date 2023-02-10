<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(ChartBuilderInterface $chartBuilder): Response
    {
        $chart = $chartBuilder->createChart(Chart::TYPE_LINE);
        $chart->setData([
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            'datasets' => [
                ['label' => 'Cool level (in %)', 'data' => [100, 200, 250, 350, 500, 600, 1000]]
            ]
        ]);

        return $this->render('homepage/index.html.twig', [
            'chart' => $chart,
        ]);
    }
}
