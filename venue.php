
    <?php include("included/header.php"); ?>
    <div class="container">
        <br /><br>
        <?php
            if (isset($_GET['rsvp'])) {
                if ($_GET['rsvp'] == 'yes') {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Thanks for reserving your spot, we look forward to seeing you at our wedding!
                    </div>';
                } else {
                    echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    Sorry that you can\'t make, but make sure to keep checking our website for updates until our big day!
                    </div>';
                }
            }
        ?>
        <legend class="col-lg-12">
            <h3 class="wedding">The Venue</h3>
        </legend>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7">
                        <img src="images/woodburn_house.jpg" style="max-width:100%;" />
                        <br><br>
                        <legend>
                            <h4 class="wedding">Woodburn Plantation</h4>
                        </legend>
                        <p>
                            Woodburn is a graceful four-story clapboard plantation house built c. 
                            1830 with a wrap-around-2-story piazza built as a summer home by Charles 
                            Cotseworth Pinckney (1789-1865). The house is an excellent example of an 
                            early 19th century SC Upcountry plantation house. While owned by members 
                            of the wealthy Adger family of Charleston, the house was expanded to 18 
                            rooms, and the farmland was increased to over 1,000 acres. The historic 
                            site now consists of the house museum furnished with antebellum antiques 
                            and family artifacts, situated on 10 acres of the original plantation with 
                            a walking trail to the ruins of other farm outbuildings. Also on site are 
                            three outbuildings, a reproduction of the Adger Victorian Carriage house 
                            that contains the traveling coach of Thomas Green Clemson; a one-room c.1810 
                            log house built by Robert Moorhead serving as the cookhouse; and a reproduction 
                            of a slave/tenant house interpreting the life of Jane Edna Hunter, the 
                            African-American activist who founded the Phyllis Wheatley Society, who was 
                            born in such a house at Woodburn in 1882.
                            <br><br>
                            <span class="pull-right">- pendletonhistoricfoundation.org</span>
                        </p>
                        <br><br>
                        <a href="directions.php">
                            <button class="btn btn-default col-lg-12">Get Directions Here</button>
                        </a>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <img src="images/woodburn_sign.jpg" style="max-width:100%; min-width:100%;" />
                        <br><br>
                        <img src="images/woodburn_stable_house.jpg" style="max-width:100%; min-width:100%;" />
                    </div>
                </div>
                <br><br>
           </div>
        </div>
        <?php include('included/footer.php'); ?>
    </div>
    