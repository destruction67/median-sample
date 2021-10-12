<?php
class medianArray{
    public $a = array(
        1, 4, 1, 2, 7,
        1, 2, 5, 3, 6
    );
    

    public function __construct($a)
	{
		$this->a = $a;
	}

}

class median extends medianArray
{

    public function __construct($a)
	{
		parent::__construct();
		$this->a = $a;
	}
    
    function printModeMedian($a)
    {
        $n = sizeof($a);



        $b[$n] = array();

        $max = max($a);

        $t = $max + 1;
        $count[$t] = array();
        for ($i = 0; $i < $t; $i++)
            $count[$i] = 0;

        
        for ($i = 0; $i < $n; $i++)
            $count[$a[$i]]++;

        
        $mode = 0;
        $k = $count[0];
        for ($i = 1; $i < $t; $i++) {
            if ($count[$i] > $k) {
                $k = $count[$i];
                $mode = $i;
            }
        }

        for ($i = 1; $i < $t; $i++)
            $count[$i] = $count[$i] + $count[$i - 1];

        for ($i = 0; $i < $n; $i++) {
            $b[$count[$a[$i]] - 1] = $a[$i];
            $count[$a[$i]]--;
        }

        $median;
        if ($n % 2 != 0)
            $median = $b[$n / 2];
        else
            $median = ($b[($n - 1) / 2] +
                $b[($n / 2)]) / 2.0;

        
        echo "median = ", $median, "\n";
        echo "mode = ", $mode;
    }
}





$getMedian = new median();
$getMedian->printModeMedian($a, $n);


