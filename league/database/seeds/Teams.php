<?php

use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Team::create([
            'team_name' => 'Augsburg FC',
            'won' => 11,
            'drew' => 0,
            'lost' =>8,
            'points' => 33,
            'info' => 'Fußball-Club Augsburg 1907 e. V., commonly known as FC Augsburg or Augsburg, is a German football club based in Augsburg, Bavaria. FC Augsburg play in the Bundesliga, the top tier of the German football league system. The team was founded as Fußball-Klub Alemania Augsburg in 1907 and played as BC Augsburg from 1921 to 1969. With over 12,200 members, it is the largest football club in Swabian Bavaria',
            'website' => 'http://www.fcaugsburg.de/cms_en/website.php'
        ]);

        \App\Team::create([
            'team_name' => 'Bayer Leverkussen',
            'won' => 8,
            'drew' => 8,
            'lost' => 3,
            'points' => 32,
            'info' => 'Bayer 04 Leverkusen Fußball GmbH, also known as Bayer 04 Leverkusen, Bayer Leverkusen, Leverkusen or simply Bayer, is a German football club based in Leverkusen, North Rhine-Westphalia. The club plays in the Bundesliga, the top tier of the German football league system, and host matches at the BayArena.',
            'website' => 'http://www.bayer04.de/B04-ENG/EN/default.aspx'
        ]);


        \App\Team::create([
            'team_name' => 'Bayern Munchen',
            'won' => 14,
            'drew' => 4,
            'lost' => 1,
            'points' => 46,
            'info' => 'Fußball-Club Bayern München e.V., commonly known as FC Bayern München, FCB, Bayern Munich, or FC Bayern, is a German sports club based in Munich, Bavaria, Germany. It is best known for its professional football team, which plays in the Bundesliga, the top tier of the German football league system, and is the most successful club in German football history, having won a record 26 national titles and 18 national cups.',
            'website' => 'http://www.fcbayern.de/en/'
        ]);


        \App\Team::create([
            'team_name' => 'Borussia Dortmund',
            'won' => 4,
            'drew' => 4,
            'lost' => 11,
            'points' => 16,
            'info' => 'Ballspielverein Borussia 09 e.V. Dortmund, commonly known as Borussia Dortmund, BVB, or simply Dortmund, is a German sports club based in Dortmund, North Rhine-Westphalia. The football team is part of a large membership-based sports club with more than 115,000 members, making BVB the third largest sports club by membership in Germany. Dortmund plays in the Bundesliga, the top tier of the German football league system. Dortmund is one of the most successful clubs in German football history.',
            'website' => 'http://www.bvb.de/eng/News/'
        ]);


        \App\Team::create([
            'team_name' => 'Eintracht Frankfurt',
            'won' => 6,
            'drew' => 6,
            'lost' => 7,
            'points' => 24,
            'info' => 'Eintracht Frankfurt e.V. is a German sports club based in Frankfurt, Hesse, that is best known for its association football club, currently playing in the Bundesliga, the top tier of the German football league system.',
            'website' => 'http://www.eintracht.de/en/news/'
        ]);


        \App\Team::create([
            'team_name' => 'Freiburg SC',
            'won' => 3,
            'drew' => 9,
            'lost' => 7,
            'points' => 18,
            'info' => 'Sport-Club Freiburg e.V., commonly known as SC Freiburg, is a German football club, based in the city of Freiburg im Breisgau, Baden-Württemberg. It plays in the Bundesliga,having been promoted as champions from the 2. Bundesliga in 2016. Freiburg has traditionally bounced between the first and second tier of the German football league system, leading to the fan chant "We go down, we go up, we go into the UEFA Cup!" during the 1990s.',
            'website' => 'http://www.scfreiburg.com/'
        ]);


        \App\Team::create([
            'team_name' => 'Hamburger SV',
            'won' => 5,
            'drew' => 5,
            'lost' => 9,
            'points' => 20,
            'info' => 'Hamburger Sport-Verein e.V., commonly known as Hamburger SV, Hamburg or HSV, is a German sport club based in Hamburg, its largest branch being its football department. Although the current HSV was founded in June 1919 from a merger of three earlier clubs, it officially traces its origin to 29 September 1887 when the first of the predecessors, SC Germania, was founded. HSV\'s football team has the unique distinction of having played continuously in the top tier of the German football league system since the end of World War I. It is the only team that has played in every season of the Bundesliga since its foundation in 1963, at which time the team was led by German national captain Uwe Seeler',
            'website' => 'https://www.hsv.de/en/uebersicht/'
        ]);


        \App\Team::create([
            'team_name' => 'Hannover 96',
            'won' => 7,
            'drew' => 4,
            'lost' => 8,
            'points' => 25,
            'info' => 'Hannoverscher Sportverein von 1896, commonly referred to as Hannover 96, Hannover, HSV or simply 96, is a German association football club based in the city of Hanover, Lower Saxony. Hannover 96 play in the 2. Bundesliga, the second tier in the German football league system.',
            'website' => 'https://www.hannover96.de/'
        ]);

        \App\Team::create([
            'team_name' => 'Hertha BSC Berlin',
            'won' => 5,
            'drew' => 3,
            'lost' => 11,
            'points' => 18,
            'info' => 'Hertha Berliner Sport-Club von 1892, commonly known as Hertha BSC or sometimes just Hertha, is a German association football club based in Berlin. Hertha BSC was founded in 1892. A founding member of the German Football Association in Leipzig in 1900, Hertha BSC play in the Bundesliga, the top-tier division of German football, after finishing at the top of the 2. Bundesliga table at the end of the 2012–13 season. Hertha BSC have won the German championship in 1930 and 1931. Since 1963, Hertha\'s stadium is the Olympiastadion.',
            'website' => 'http://www.herthabsc.de/en/'
        ]);

        \App\Team::create([
            'team_name' => 'Mainz 05',
            'won' => 4,
            'drew' => 10,
            'lost' => 5,
            'points' => 22,
            'info' => '1. Fußball- und Sportverein Mainz 05 e. V., usually shortened to 1. FSV Mainz 05, Mainz 05 or simply Mainz, is a German association football club, founded in 1905 and based in Mainz, Rhineland-Palatinate. 1. FSV Mainz 05 have played in the Bundesliga, the top tier of the German football league system, for seven consecutive years, starting with the 2009–10 season. The club\'s main local rivals are Eintracht Frankfurt and 1. FC Kaiserslautern. In addition to the football division, 1. FSV Mainz 05 have handball and table tennis departments.',
            'website' => 'http://www.mainz05.de/mainz05/en/home.html'
        ]);
    }
}
