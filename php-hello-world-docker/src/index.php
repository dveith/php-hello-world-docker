<html>
 <head>
   <title>Hello World v2 - Docker Container</title>
    </head>
     <body>
       <?php 

       function get_url_contents($url){
          $crl = curl_init();
          $timeout = 5;
          curl_setopt ($crl, CURLOPT_URL,$url);
          curl_setopt ($crl, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt ($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
          $ret = curl_exec($crl);
          curl_close($crl);
          $pos = strpos($ret, "404");
          if ($pos == true)
             $ret = "undefined";
          
          return $ret;
       }

       echo "<h1>";
       echo "Running on Docker Container";
       echo "</h1>";

       echo "<h1>";
       $f = get_url_contents("http://169.254.169.254/latest/meta-data/hostname/");
       echo "<font color = \"blue\">Hostname: $f</font>";
       echo "</h1>";

       echo "<table>";
       echo "<tr>";
       $f = get_url_contents("http://169.254.169.254/latest/meta-data/placement/availability-zone/");
       echo "<td>","<h2> zone:  </h2>", "</td> <td><h2> ", $f, " </h2></td>";
       echo "</tr>";

       echo "<tr>";
       $f = get_url_contents("http://169.254.169.254/latest/meta-data/ami-id/");
       echo "<td>","<h2> ami id:  </h2>", "</td> <td><h2> ", $f, " </h2></td>";
       echo "</tr>";

       echo "<tr>";
       $f = get_url_contents("http://169.254.169.254/latest/meta-data/kernel-id/");
       echo "<td>","<h2> kernel id:  </h2>", "</td> <td><h2> ", $f, " </h2></td>";
       echo "</tr>";

       echo "<tr>";
       $f = get_url_contents("http://169.254.169.254/latest/meta-data/instance-id/");
       echo "<td>","<h2> instance id:  </h2>", "</td> <td><h2> ", $f, " </h2></td>";
       echo "</tr>";

       echo "<tr>";
       $f = get_url_contents("http://169.254.169.254/latest/meta-data/instance-type/");
       echo "<td>","<h2> instance type:  </h2>", "</td> <td><h2> ", $f, " </h2></td>";
       echo "</tr>";

       echo "<tr>";
       $f = get_url_contents("http://169.254.169.254/latest/meta-data/local-ipv4/");
       echo "<td>","<h2> local ip:  </h2>", "</td> <td><h2><font color = \"red\"> ", $f, "</font> </h2></td>";
       echo "</tr>";

       echo "<tr>";
       $f = get_url_contents("http://169.254.169.254/latest/meta-data/public-ipv4/");
       echo "<td>","<h2> public ip:  </h2>", "</td> <td><h2> ", $f, " </h2></td>";
       echo "</tr>";

       echo "<tr>";
       $f = get_url_contents("http://169.254.169.254/latest/meta-data/public-hostname/");
       echo "<td>","<h2> public hostname:  </h2>", "</td> <td><h2> ", $f, " </h2></td>";
       echo "</tr>";

       echo "<tr>";
       $date = date('m/d/Y h:i:s a', time());
       echo "<td>","<h2> timestamp:  </h2>", "</td> <td><h2> ", $date, " </h2></td>";
       echo "</tr>";
       
       echo "</table>";
       echo "</h2>";
       ?>

       </h2>
    </body>
</html>
