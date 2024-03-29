<!DOCTYPE html>
<!-- Document Writen By Nicholas Graham for CSC 170 -->

<html lang ="en">

<head>
  <meta charset="utf-8">
  <title>Nicholas Graham, CSC-170 Project 3</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>

  <div class="container">

    <?php include "inc/header.inc"; ?>

    <nav>
      <ul>
        <li><a href="index.php" class="current">Home</a></li>
        <li><a href="aaron-swartz.php">Aaron Swartz</a></li>
        <li><a href="radia-pearlman.php">Radia Pearlman</a></li>
        <li><a href="marissa-mayer.php">Marissa Mayer</a></li>
        <li><a href="alan-turing.php">Alan Turing</a></li>
      </ul>
    </nav>


    <article>

      <h2>Important People of the Web</h2>

      <section class="overview">

        <h3>Aaron Swartz</h3>

        <img src="images/aaron.jpg" alt="Aaron">
        <p>Aaron Hillel Swartz (November 8, 1986 – January 11, 2013) was an American computer programmer, writer, political organizer and Internet Hacktivist. Swartz was involved in the development of the web feed format RSS and the Markdown publishing format, the organization Creative Commons, the website framework web.py and the social news site, Reddit, in which he became a partner after its merger with his company, Infogami. Swartz's work also focused on sociology, civic awareness and activism.</p>
        <a href="aaron-swartz.php">Read more about Aaron Swartz</a>

      </section>

      <section class="overview">

        <h3>Radia Pearlman</h3>

        <img src="images/radpearl.jpg" alt="Radia">
        <p>Radia Joy Perlman (born 1951) is a software designer and network engineer. She is most famous for her invention of the spanning-tree protocol (STP), which is fundamental to the operation of network bridges, while working for Digital Equipment Corporation. She also made large contributions to many other areas of network design and standardization, such as link-state protocols, including TRILL, which she invented to correct some of the shortcomings of spanning-trees.</p>
        <a href="radia-pearlman.php">Read more about Radia Pearlman</a>

      </section>

      <section class="overview">

        <h3>Marissa Mayer</h3>

        <img src="images/mugshot.jpg" alt="Marissa">
        <p>Marissa Mayer, born on May 30, 1975, in Wausau, Wisconsin, was appointed CEO of Yahoo in 2012. Prior to joining Yahoo, she spent 13 years at Google, where her work in product development largely contributed to the site's unique look and feel. At the time of Mayer's Yahoo appointment, she was one of <em>only 20</em> female CEOs in charge of a Fortune 500 company.</p>
        <a href="marissa-mayer.php">Read more about Marissa Mayer</a>

      </section>

      <section class="overview">

        <h3>Alan Turing</h3>

        <img src="images/turing.jpg" alt="Alan">
        <p>Alan Mathison Turing was a British mathematician, logician, cryptanalyst, philosopher, computer scientist, mathematical biologist, and marathon and ultra distance runner. He was highly influential in the developmemt of computer science, providing a formalisation of the concepts of "algorithms" and "computations" with the Turing machine, which can be considered a model of a general purpose machine. Turing is widely considered to be the father of theoretical computer science and artificial intelligence.</p>
        <a href="alan-turing.php">Read more about Alan Turing</a>

      </section>

    </article>

    <?php include "inc/footer.inc"; ?>

  </div><!--container-->

</body>

</html>
