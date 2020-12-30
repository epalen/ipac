<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class Dashboard extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
	 * Show a sample chart.
	 *
	 * @return Response
	 */
	 public function chart()
	 {
	  $chart = new SampleChart;
	  // Additional logic depending on the chart approach
	  return view('admin', ['chart' => $chart]);
	 }
}
