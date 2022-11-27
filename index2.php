<?php
/**
	* The main template file
	* more static editable version
	*/
	defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

	get_header();


	echo $zmtheme[ 'archive__archivecontainer' ]->getModuleStart();

		echo $zmtheme[ 'archive__archivetitle' ]->getModule();

		echo $zmtheme[ 'archive__archivedescription' ]->getModule();

		echo $zmtheme[ 'archive__articlelistcontainer' ]->getModuleStart();

			if ( have_posts() ) {

				while ( have_posts() ) {

					the_post();

					echo $zmtheme[ 'posts__template' ]->getTemplate();

				}

			}

			echo $zmtheme[ 'archive__pagination' ]->getModule();

		echo $zmtheme[ 'archive__articlelistcontainer' ]->getModuleEnd();

	echo $zmtheme[ 'archive__archivecontainer' ]->getModuleEnd();


	get_footer();
