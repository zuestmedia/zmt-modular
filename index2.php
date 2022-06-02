<?php
/**
 * The main template file
 * more static editable version
 * @package zmtheme
 * @since 1.0.0
 */

get_header();


echo $zmtheme[ 'archive__archivecontainer' ]->getModuleStart();

	echo $zmtheme[ 'archive__archivetitle' ]->getModule();

	echo $zmtheme[ 'archive__archivedescription' ]->getModule();

	echo $zmtheme[ 'archive__articlelistcontainer' ]->getModuleStart();

		if ( have_posts() ) {
			//$i = 0;
			while ( have_posts() ) {

				/* -- old separator --
				$i++;

				if ( $i > 1 ) {

					echo $zmtheme[ 'posts__separator' ]->getModule();

				}*/

				the_post();

				echo $zmtheme[ 'posts__template' ]->getTemplate();

			}

		}

		echo $zmtheme[ 'archive__pagination' ]->getModule();

	echo $zmtheme[ 'archive__articlelistcontainer' ]->getModuleEnd();

echo $zmtheme[ 'archive__archivecontainer' ]->getModuleEnd();


get_footer();
