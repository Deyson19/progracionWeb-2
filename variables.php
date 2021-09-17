<?php
          class CalcularFecha
          {
               public static function calculandoFecha()
               {
                    $i = new DateInterval('P30D');
                    $d1 = new Datetime();
                    $p = new DatePeriod($d1, $i, 5);

                    foreach ($p as $d) {
                         echo "<br>" . $d->format('Y-m-d') . "\n";
                    }
               }
          }
?>