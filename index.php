<?php 
// Boolean - a true or false variable
$wordcamp_is_awesome = true;

// Integer - number
$number_of_wordcamps = 4;

// String - text
$warm_greetings = 'Thank you for coming to my session!';

// Array - a group of data in key/value pairs
$array_with_keys = array(
	'lunch' => 'yummy',
	'sessions' => 'awesome',
	'after_party' => "Can't wait!"
);

// An array without key's gets assigned numerical keys automatically
$array_without_keys = array(
	'yummy', // 0
	'awesome', // 1
	"Can't wait!" // 2
);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Smallest Theme</title>
	</head>
	<body>	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php /* 
			<h1><?php echo 'Smallest Theme in PHP'; ?></h1>
			<h1><?php echo get_the_title( 1 ); ?></h1>
			*/ ?>
			<main>
				<h1><?php the_title( ); ?></h1>
				<?php 
				// Printing variables to the page 
				?>
				<p>Welcome to WordCamp Nashville #<?php echo $number_of_wordcamps; ?></p>
				<p>Lunch was <?php echo $array_with_keys[ 'lunch' ]; ?>.</p>
				
				<?php 
				// Simple if statement
				if ( $wordcamp_is_awesome ) { 
					$awesomeness = $array_with_keys[ 'sessions' ];
				} else {
					$awesomeness = "Got ya! It's still awesome";
				}
				?>
				<h3>WordCamp is ... <?php echo $awesomeness; ?>!</h3>
				
				<?php 
				// You can’t “print” an array without a loop, but you can print single data points.
				?>
				<h4>Printing Arrays</h4>
				<p><?php print_r ( $array_without_keys ); ?></p>
				<p><?php echo $array_without_keys[ 1 ]; ?></p>

				
				<?php 
				// Evaluate using a comparison operator
				?>
				<h4>Evaluating a variable by comparison</h4>
				<?php
				if ( $number_of_wordcamps == 4 ) { 
					echo '<p>This fourth WordCamp is the best.</p>';
				}
				?>
				
				<?php 
				// Evaluate using a logical operator
				?>
				<h4>Evaluating a variable by logical operator</h4>
				<?php
				if ( $number_of_wordcamps == 4 && $wordcamp_is_awesome ) { 
					echo "<p>Now you're getting the hang of it.</p>";
				}
				?>
				
				<?php the_content(); ?>
				
			</main>
			<footer>
				<h4>Thank you!</h4>
				<?php echo $warm_greetings; ?>
			</footer>
		<?php endwhile; endif;?>
	</body>
</html>
