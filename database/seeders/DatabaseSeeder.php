<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Apod;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
 
    	$apod = Apod::factory(1)->create([
    		"title" => "The Double Cluster in Perseus",
    		"hdurl" => "https://apod.nasa.gov/apod/image/2307/Caldwell_14_2023_HaLRGB_LRGB_stars_wm-scaled.png",
    		"url" => "https://apod.nasa.gov/apod/image/2307/Caldwell_14_2023_HaLRGB_LRGB_stars_wm-scaled.png",
    		"explanation" => "Discover the cosmos! Each day a different image or photograph of our fascinating universe is featured, along with a brief explanation written by a professional astronomer.",
    		"published_at" => "2023-07-07"
    	]);

    	$apod = Apod::factory(1)->create([
    		"title" => "The Double Cluster in Perseus",
    		"hdurl" => "https://apod.nasa.gov/apod/image/2307/CocoaBeach_BuckMoon_Seeley-201_1100.jpg",
    		"url" => "https://apod.nasa.gov/apod/image/2307/CocoaBeach_BuckMoon_Seeley-201_1100.jpg",
    		"explanation" => "On July 4, an almost Full Moon rose in planet Earth's evening skies. Also known as a Buck Moon, the full lunar phase (full on July 3 at 11:39 UTC) was near perigee, the closest point in the Moon's almost monthly orbit around planet Earth. That qualified this July's Full Moon as a supermoon, the first of four supermoons in 2023. Seen from Cocoa Beach along Florida's Space Coast on July 4, any big, bright, beautiful Full Moon would still have to compete for attention though. July's super-moonrise was captured here against a super-colorful fireworks display.",
    		"published_at" => "2023-07-06"
    	]);

    	$apod = Apod::factory(1)->create([
    		"title" => "A Map of the Observable Universe",
    		"hdurl" => "https://apod.nasa.gov/apod/image/2307/MapObsUni_SDSS_2400.jpg",
    		"url" => "https://apod.nasa.gov/apod/image/2307/MapObsUni_SDSS_2400.jpg",
    		"explanation" => "What if you could see out to the edge of the observable universe? You would see galaxies, galaxies, galaxies, and then, well, quasars, which are the bright centers of distant galaxies. To expand understanding of the very largest scales that humanity can see, a map of the galaxies and quasars found by the Sloan Digital Sky Survey from 2000 to 2020 -- out to near the edge of the observable universe -- has been composed. Featured here, one wedge from this survey encompasses about 200,000 galaxies and quasars out beyond a look-back time of 12 billion years and cosmological redshift 5. Almost every dot in the nearby lower part of the illustration represents a galaxy, with redness indicating increasing redshift and distance. Similarly, almost every dot on the upper part represents a distant quasar, with blue-shaded dots being closer than red. Clearly shown among many discoveries, gravity between galaxies has caused the nearby universe to condense and become increasingly more filamentary than the distant universe.",
    		"published_at" => "2023-07-05"
    	]);

			$apod = Apod::factory(1)->create([
    		"title" => "Venus in Ultraviolet from Akatsuki",
    		"hdurl" => "https://apod.nasa.gov/apod/image/2307/VenusUv_akatsuki_1024.jpg",
    		"url" => "https://apod.nasa.gov/apod/image/2307/VenusUv_akatsuki_1024.jpg",
    		"explanation" => "Discover the cosmos! Each day a different image or photograph of our fascinating universe is featured, along with a brief explanation written by a professional astronomer.",
    		"published_at" => "2023-07-03"
    	]);

			$apod = Apod::factory(1)->create([
    		"title" => "MAVEN's Ultraviolet Mars",
    		"hdurl" => "https://apod.nasa.gov/apod/image/2306/MavenMars2panel.png",
    		"url" => "https://apod.nasa.gov/apod/image/2306/MavenMars2panel.png",
    		"explanation" => "These two global views of Mars were captured at ultraviolet wavelengths, beyond the spectrum visible to human eyes. Recorded by the MAVEN spacecraft's Imaging Ultraviolet Spectrograph instrument in July 2022 (left) and January 2023, three otherwise invisible ultraviolet bands are mapped into red, green, and blue colors. That color scheme presents the Red Planet's surface features in shades of tan and green. Haze and clouds appear white or blue, while high altitude ozone takes on a dramatic purple hue. On the left, Mars' south polar ice cap is in brilliant white at the bottom but shrinking during the southern hemisphere's summer season. On the right, the northern hemisphere's polar region is seen shrouded in clouds and atmospheric ozone. Known to some as the Mars Atmosphere and Volatile EvolutioN spacecraft, MAVEN has been exploring Mars' tenuous upper atmosphere, ionosphere, and its interactions with the Sun and solar wind since 2014.",
    		"published_at" => "2023-07-03"
    	]);

			$apod = Apod::factory(1)->create([
	  		"title" => "The Belt of Venus over Mount Everest",
	  		"hdurl" => "https://apod.nasa.gov/apod/image/2306/BeltofEverest_Mukherjee_4000_annotated.jpg",
	  		"url" => "https://apod.nasa.gov/apod/image/2306/BeltofEverest_Mukherjee_4000_annotated.jpg",
	  		"explanation" => "You've surely seen it, but you might not have noticed it. During a cloudless twilight, just before sunrise or after sunset, part of the atmosphere above the horizon appears slightly dark and off-color. Called the Belt of Venus, this transitional band between the dark eclipsed sky and the bright day sky can be seen most prominently in the direction opposite the Sun. Straight above, blue sky is normal sunlight reflecting off the atmosphere, while near the horizon the clear sky can appear more orange or red. In the Belt of Venus, the atmosphere reflects more light from the setting (or rising) Sun and so appears more red. Featured here, the Belt of Venus was photographed over several Himalayan mountains including, second from the right, Mount Everest, the tallest mountain on Earth. Although usually not mentioned, the belt is frequently caught by accident in other photographs.",
	  		"published_at" => "2023-06-26"
	    	]);

			$apod = Apod::factory(1)->create([
				"title" => "3D Ingenuity",
				"hdurl" => "https://apod.nasa.gov/apod/image/2306/PIA24547_fig1.jpg",
				"url" => "https://apod.nasa.gov/apod/image/2306/PIA24547_fig1.jpg",
				"explanation" => "The multicolor, stereo imaging Mastcam-Z on the Perseverance rover zoomed in to capture this 3D close-up (get out your red/blue glasses) of the Mars Ingenuity helicopter on mission sol 45. That's Earth-date 2021 April 5. Casting a shadow on the Martian surface, Ingenuity is standing alone on its four landing legs next to the rover's wheel tracks. The experimental helicopter's solar panel, charging batteries that keep it warm through the cold Martian nights and power its flight, sits just above Ingenuity's two 1.2 meter (4 foot) long counter-rotating blades. Thirteen sols later, on April 19, Ingenuity became the first aircraft to perform powered, controlled flight on another planet. It has since gone on to complete more than 50 flights through the thin atmosphere of Mars.",
				"published_at" => "2023-06-24"
		    	]);

			$apod = Apod::factory(1)->create([
				"title" => "Giant Galaxies in Pavo",
				"hdurl" => "https://apod.nasa.gov/apod/image/2306/NGC-6872-LRGB-rev-5-crop-CDK-1000-22-May-2023_1024.jpg",
				"url" => "https://apod.nasa.gov/apod/image/2306/NGC-6872-LRGB-rev-5-crop-CDK-1000-22-May-2023_1024.jpg",
				"explanation" => "Over 500,000 light years across, NGC 6872 (top right) is a truly enormous barred spiral galaxy, at least 5 times the size of our own very large Milky Way. The appearance of this giant galaxy's distorted and stretched out spiral arms suggests the magnificent wings of a giant bird. Of course its popular moniker is the Condor galaxy. It lies about 200 million light-years distant toward the southern constellation Pavo, the Peacock. Lined with star-forming regions, the distorted spiral arms are due to NGC 6872's gravitational interaction with the nearby smaller galaxy IC 4970, seen just above the giant galaxy's core. The Pavo galaxy group's dominant giant elliptical galaxy, NGC 6876 is below and left of the soaring Condor galaxy.",
				"published_at" => "2023-06-23"
		    	]);

    }
}
