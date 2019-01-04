<?php
if(isset($_POST['emailsubscibe']))
{
$subscriberemail=$_POST['subscriberemail'];
$sql ="SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
$query= $dbh -> prepare($sql);
$query-> bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
echo "<script>alert('Already Subscribed.');</script>";
}
else{
$sql="INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
$query = $dbh->prepare($sql);
$query->bindParam(':subscriberemail',$subscriberemail,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Subscribed successfully.');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
}
?>

<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
      
       <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pages</h4>

                        <ul>
                            <li><a href="page.php?type=aboutus">About us</a>
                            </li>
                            <li><a href="text.html">Terms and conditions</a>
                            </li>
                            <li><a href="faq.php?type=faq">FAQ</a>
                            </li>
                            <li><a href="contact-us.php">Contact us</a>
                            </li>
                        </ul>


                     

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->


                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>UrvanZone</strong>
                            J9 - 33 
                            Evangelista Avenue, 
                            Corner F. Marcelo Street, 
                            Santolan Pasig City, Philippines
                            <br>
                            <strong>Philippines</strong>
                        </p>

                        <a href="contact-us.php">Go to contact page</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-6 col-sm-12">

                        <h4>Get the news</h4>

                        <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn"><button class="btn btn-default" type="button">Subscribe!</button></span>

                            </div>
                            <!-- /input-group -->
                        </form>

                        <hr>

                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->
      </div>

    </div>
    <div class="credits">2018 Urvanzone Car Rental |Powered by SpyCode</div>
  </div>

</footer>
