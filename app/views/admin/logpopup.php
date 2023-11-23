
            <?php
                // Load user-specific data, e.g., from the database
                $user_email = $_SESSION['email'];
                // Query the database to fetch user-specific data
                echo "
                <a href='profile.php'>
                     <div>
                        <div class='iconBx' >
                          <ion-icon  name='cog-outline' size='large'></ion-icon>
                          <span>$user_email</span>
                        </div> 
                        
                      </div>   
                </a> ";
            ?>