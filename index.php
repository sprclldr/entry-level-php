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

// An array without key's gets assigned numerical keys
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
				<p>Lunch was <?php echo $test_array['lunch']; ?>.</p>
				
				<?php 
				// Simple if statement
				if ( $wordcamp_is_awesome ) { 
					$awesomeness = $test_array['sessions'];
				} else {
					$awesomeness = "Got ya! It's still awesome";
				}
				?>
				<h3>WordCamp is ... <?php echo $awesomeness; ?>!</h3>
				
				<?php 
				// Evaluate using a comparison operator
				if ( $number_of_wordcamps == 4 ) { 
					echo '<p>This fourth WordCamp is the best.</p>';
				}
				?>
				
				<?php 
				// Evaluate using a logical operator
				if ( $number_of_wordcamps == 4 && $wordcamp_is_awesome ) { 
					echo "<p>Now you're getting the hang of it.</p>";
				}
				?>
				
				<?php the_content(); ?>
				
			</main>
			<footer><?php echo $warm_greetings; ?></footer>
		<?php endwhile; endif;?>
	</body>
</html>