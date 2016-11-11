<?php
include("ParentClass.php");
include("ChildClass.php");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>
	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<div>
		<h1>So the other day...</h1>
		<h3>or</h3>
		<h2>When I tried to buy a pet</h2>
		<p>So the other day I decided to buy a pet.</p>
		<p>I headed over to the pet store, not knowing what kind of pet i wanted</p>
		<p>"What do you recommend?" I asked the man in charge"</p>
		<p>"I have just the pet for you." The man said"</p>
		<?= $pet1=new Pet(); ?>
		<p>It is a <?= $pet1->getSpecies() ?>. It's name is <?= $pet1->getName() ?>.</p>
		<p>"I'll take it!" I called out excited and not thinking at all.</p>
		<p>Things went great with <?= $pet1->getName() ?> at first, but that didn't last long.</p>
		<p>He was <?= $pet1->getQual1() ?> and <?= $pet1->getQual2() ?> which I didn't like. So I brought him back to the store.</p>
		<p>"This time," I said "I want a Dog!"</p>
		<p>"How old is that lab over there?"</p>
		<p>"6 years old," said the man.</p>
		<p>"And what's his name?" I asked.</p>
		<p>"Sparky," said the man.</p>
		<p>"I'll take him!" I shouted.</p>
		<?=  $pet2 = new Dog("Sparky", "Labrador Retriever", "6")?>
		<p>"Speak," I told him. And he dutifully obliged.</p>
		<p><?= $pet2->speak() ?></p>
		<p>On the way home, we met another man walking a dog. "Who is this?" I asked</p>
		<p>"This is Spot" said the man.</p>
		<?=  $otherDog = new Dog("Spot", "Labrador Retriever", "2")?>
		<p>"This is <?= $pet2->getName() ?>." I told him"</p>
		<p>And funnily enough, we each liked the names of the others dog so much that we decided to switch them.</p>
		<?= $pet2->setName($pet2->swapName("Sparky"));?>
		<p>Things went great with <?= $pet2->getName() ?> (or the artist formerly known as <?= $otherDog->getName() ?>) for a while, but that didn't last long.</p>
		<p>He was <?= $pet2->getQual1() ?> which I liked, but was <?= $pet2->getQual2() ?> which I didn't like.</p>
		<p>So ... I decided to release him and set him free.</p>
		<p> I attached a note to him that said <?= $pet2 ?>, you may keep him." and I set him free to roam the earth.</p>
	</div?
</body>
</html>
