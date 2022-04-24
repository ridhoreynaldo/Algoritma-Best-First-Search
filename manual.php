<?php
/*
    Php program
    Greedy algorithm to find minimum number of coins
*/
class Change
{
	// Find minimum coins whose sum make a given value
	public	function minNoOfCoins($coins, $n, $value)
	{
		if ($value <= 0)
		{
			return;
		}
		// Sort the given coins
		sort($coins);
		// Use to collect coins
		$record = array();
		// Auxiliary variables
		$sum = 0;
		$i = $n - 1;
		$c = 0;
		//  Find the change coins by given value
		while ($i >= 0 && $sum < $value)
		{
			// Get coin
			$c = $coins[$i];
			while ($c + $sum <= $value)
			{
				// Add coin
				array_push($record, $c);
				// Update sum
				$sum += $c;
			}
			// Reduce position of element
			$i--;
		}
		echo "<br> Given value is ".strval($value), "<br>";
		if ($sum == $value)
		{
			// When change are possible.  
			// Display resultant coins.
			for ($v = 0; $v < count($record); ++$v)
			{
				echo "  ",$record[$v];
			}
		}
		else
		{
			echo " Full change are not possible";
		}
	}
	public static
	function main($args)
	{
		$task = new Change();
		$coins = array(1,2,3,4,5,6,7,8);
		$n = count($coins);
		// Value = 23
		$task->minNoOfCoins($coins, $n, 100);
		// Value = 38
		$task->minNoOfCoins($coins, $n, 9);
		// Value = 7
		$task->minNoOfCoins($coins, $n, 7);
	}
}
Change::main(array());