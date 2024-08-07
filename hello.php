<?php
                // Check if the user is logged in
                if (isset($_SESSION['username'])) {
                    // User is logged in, display their name and logout link
                    echo '<span style="color:white;font-family:sans-serif; text-decoration:none; text-transform:uppercase;">Hello ' . $_SESSION['username'] . '</span>';
                    echo '&nbsp;';
                    echo '&nbsp;';
                    echo '<a href="/CryptoVerse/markets.php" class="active">Markets</a>';
                    echo '<a href="/CryptoVerse/cryptocurrencies.php">Cryptocurrencies</a>';
                    echo '<a href="/CryptoVerse/news.php">Trending news</a>';
                    echo '<a class="nav-links" href="index.html" >Log Out</a>';
                } else 
                {
                    // User is not logged in, display login link
                    echo '<a class="nav-link" href="signin.html";">Log In</a>';
            }
                
?>