<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Languages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('languages')->delete();

    	$languages= array(
                    array('name'=>'Afrikaans'),
                    array('name'=>'Albanian'),
                    array('name'=>'Amharic'),
                    array('name'=>'Arabic'),
                    array('name'=>'Armenian'),
                    array('name'=>'Azerbaijani'),
                    array('name'=>'Basque'),
                    array('name'=>'Belarusian'),
                    array('name'=>'Bengali'),
                    array('name'=>'Bosnian'),
                    array('name'=>'Bulgarian'),
                    array('name'=>'Catalan'),
                    array('name'=>'Cebuano'),
                    array('name'=>'Chichewa'),
                    array('name'=>'Chinese (Simplified)'),
                    array('name'=>'Chinese (Traditional)'),
                    array('name'=>'Corsican'),
                    array('name'=>'Croatian'),
                    array('name'=>'Czech'),
                    array('name'=>'Danish'),
                    array('name'=>'Dutch'),
                    array('name'=>'English'),
                    array('name'=>'Esperanto'),
                    array('name'=>'Estonian'),
                    array('name'=>'Filipino'),
                    array('name'=>'Finnish'),
                    array('name'=>'French'),
                    array('name'=>'Frisian'),
                    array('name'=>'Galician'),
                    array('name'=>'Georgian'),
                    array('name'=>'German'),
                    array('name'=>'Greek'),
                    array('name'=>'Gujarati'),
                    array('name'=>'Haitian Creole'),
                    array('name'=>'Hausa'),
                    array('name'=>'Hawaiian'),
                    array('name'=>'Hebrew'),
                    array('name'=>'Hindi'),
                    array('name'=>'Hmong'),
                    array('name'=>'Hungarian'),
                    array('name'=>'Icelandic'),
                    array('name'=>'Igbo'),
                    array('name'=>'Indonesian'),
                    array('name'=>'Irish'),
                    array('name'=>'Italian'),
                    array('name'=>'Japanese'),
                    array('name'=>'Javanese'),
                    array('name'=>'Kannada'),
                    array('name'=>'Kazakh'),
                    array('name'=>'Khmer'),
                    array('name'=>'Korean'),
                    array('name'=>'Kurdish (Kurmanji)'),
                    array('name'=>'Kyrgyz'),
                    array('name'=>'Lao'),
                    array('name'=>'Latin'),
                    array('name'=>'Latvian'),
                    array('name'=>'Lithuanian'),
                    array('name'=>'Luxembourgish'),
                    array('name'=>'Macedonian'),
                    array('name'=>'Malagasy'),
                    array('name'=>'Malay'),
                    array('name'=>'Malayalam'),
                    array('name'=>'Maltese'),
                    array('name'=>'Maori'),
                    array('name'=>'Marathi'),
                    array('name'=>'Mongolian'),
                    array('name'=>'Myanmar (Burmese)'),
                    array('name'=>'Nepali'),
                    array('name'=>'Norwegian'),
                    array('name'=>'Pashto'),
                    array('name'=>'Persian'),
                    array('name'=>'Polish'),
                    array('name'=>'Portuguese'),
                    array('name'=>'Punjabi'),
                    array('name'=>'Romanian'),
                    array('name'=>'Russian'),
                    array('name'=>'Samoan'),
                    array('name'=>'Scots Gaelic'),
                    array('name'=>'Serbian'),
                    array('name'=>'Sesotho'),
                    array('name'=>'Shona'),
                    array('name'=>'Sindhi'),
                    array('name'=>'Sinhala'),
                    array('name'=>'Slovak'),
                    array('name'=>'Slovenian'),
                    array('name'=>'Somali'),
                    array('name'=>'Spanish'),
                    array('name'=>'Sundanese'),
                    array('name'=>'Swahili'),
                    array('name'=>'Swedish'),
                    array('name'=>'Tajik'),
                    array('name'=>'Tamil'),
                    array('name'=>'Telugu'),
                    array('name'=>'Thai'),
                    array('name'=>'Turkish'),
                    array('name'=>'Ukrainian'),
                    array('name'=>'Urdu'),
                    array('name'=>'Uzbek'),
                    array('name'=>'Vietnamese'),
                    array('name'=>'Welsh'),
                    array('name'=>'Xhosa'),
                    array('name'=>'Yiddish'),
                    array('name'=>'Yoruba'),
                    array('name'=>'Zulu')
                );

            foreach ($languages as $key => $value) {
                $data=$value;
                $data['id']=$key+1;
                DB::table('languages')->insert($data); 
            }


    }
}
