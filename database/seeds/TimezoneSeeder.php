<?php

use Illuminate\Database\Seeder;

class TimezoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    	DB::table('timezones')->delete();

        $timezones=array(
        	['tz'=>'America/New_York','name'=>'America, Eastern'],
			['tz'=>'America/Chicago','name'=>'America, Central'],
			['tz'=>'America/Denver','name'=>'America, Mountain'],

			['tz'=>'America/Phoenix','name'=>'America, Mountain (no DST)'],

			['tz'=>'America/Los_Angeles','name'=>'America, Pacific'],

			['tz'=>'America/Anchorage','name'=>'America, Alaska'],

			['tz'=>'America/Adak','name'=>'America, Hawaii'],

			['tz'=>'Pacific/Honolulu','name'=>'Pacific, Hawaii (no DST)'],

			['tz'=>'Pacific/Midway','name'=>'Pacific, Midway (GMT-11:00)'],

			['tz'=>'Pacific/Niue','name'=>'Pacific, Niue (GMT-11:00)'],

			['tz'=>'Pacific/Pago_Pago','name'=>'Pacific, Pago Pago (GMT-11:00)'],

			['tz'=>'Pacific/Honolulu','name'=>'Pacific, Honolulu (GMT-10:00)'],

			['tz'=>'Pacific/Johnston','name'=>'Pacific, Johnston (GMT-10:00)'],

			['tz'=>'Pacific/Rarotonga','name'=>'Pacific, Rarotonga (GMT-10:00)'],

			['tz'=>'Pacific/Tahiti','name'=>'Pacific, Tahiti (GMT-10:00)'],

			['tz'=>'Pacific/Marquesas','name'=>'Pacific, Marquesas (GMT-09:30)'],

			['tz'=>'America/Adak','name'=>'America, Adak (GMT-09:00)'],

			['tz'=>'Pacific/Gambier','name'=>'Pacific, Gambier (GMT-09:00)'],

			['tz'=>'America/Anchorage','name'=>'America, Anchorage (GMT-08:00)'],

			['tz'=>'America/Juneau','name'=>'America, Juneau (GMT-08:00)'],

			['tz'=>'America/Metlakatla','name'=>'America, Metlakatla (GMT-08:00)'],

			['tz'=>'America/Nome','name'=>'America, Nome (GMT-08:00)'],

			['tz'=>'America/Sitka','name'=>'America, Sitka (GMT-08:00)'],

			['tz'=>'America/Yakutat','name'=>'America, Yakutat (GMT-08:00)'],

			['tz'=>'Pacific/Pitcairn','name'=>'Pacific, Pitcairn (GMT-08:00)'],

			['tz'=>'America/Creston','name'=>'America, Creston (GMT-07:00)'],

			['tz'=>'America/Dawson','name'=>'America, Dawson (GMT-07:00)'],

			['tz'=>'America/Dawson_Creek','name'=>'America, Dawson Creek (GMT-07:00)'],

			['tz'=>'America/Fort_Nelson','name'=>'America, Fort Nelson (GMT-07:00)'],

			['tz'=>'America/Hermosillo','name'=>'America, Hermosillo (GMT-07:00)'],

			['tz'=>'America/Los_Angeles','name'=>'America, Los Angeles (GMT-07:00)'],

			['tz'=>'America/Phoenix','name'=>'America, Phoenix (GMT-07:00)'],

			['tz'=>'America/Tijuana','name'=>'America, Tijuana (GMT-07:00)'],

			['tz'=>'America/Vancouver','name'=>'America, Vancouver (GMT-07:00)'],

			['tz'=>'America/Whitehorse','name'=>'America, Whitehorse (GMT-07:00)'],

			['tz'=>'America/Belize','name'=>'America, Belize (GMT-06:00)'],

			['tz'=>'America/Boise','name'=>'America, Boise (GMT-06:00)'],

			['tz'=>'America/Cambridge_Bay','name'=>'America, Cambridge Bay (GMT-06:00)'],

			['tz'=>'America/Chihuahua','name'=>'America, Chihuahua (GMT-06:00)'],

			['tz'=>'America/Costa_Rica','name'=>'America, Costa Rica (GMT-06:00)'],

			['tz'=>'America/Denver','name'=>'America, Denver (GMT-06:00)'],

			['tz'=>'America/Edmonton','name'=>'America, Edmonton (GMT-06:00)'],

			['tz'=>'America/El_Salvador','name'=>'America, El Salvador (GMT-06:00)'],

			['tz'=>'America/Guatemala','name'=>'America, Guatemala (GMT-06:00)'],

			['tz'=>'America/Inuvik','name'=>'America, Inuvik (GMT-06:00)'],

			['tz'=>'America/Managua','name'=>'America, Managua (GMT-06:00)'],

			['tz'=>'America/Mazatlan','name'=>'America, Mazatlan (GMT-06:00)'],

			['tz'=>'America/Ojinaga','name'=>'America, Ojinaga (GMT-06:00)'],

			['tz'=>'America/Regina','name'=>'America, Regina (GMT-06:00)'],

			['tz'=>'America/Swift_Current','name'=>'America, Swift Current (GMT-06:00)'],

			['tz'=>'America/Tegucigalpa','name'=>'America, Tegucigalpa (GMT-06:00)'],

			['tz'=>'America/Yellowknife','name'=>'America, Yellowknife (GMT-06:00)'],

			['tz'=>'Pacific/Galapagos','name'=>'Pacific, Galapagos (GMT-06:00)'],

			['tz'=>'America/Atikokan','name'=>'America, Atikokan (GMT-05:00)'],

			['tz'=>'America/Bahia_Banderas','name'=>'America, Bahia Banderas (GMT-05:00)'],

			['tz'=>'America/Bogota','name'=>'America, Bogota (GMT-05:00)'],

			['tz'=>'America/Cancun','name'=>'America, Cancun (GMT-05:00)'],

			['tz'=>'America/Cayman','name'=>'America, Cayman (GMT-05:00)'],

			['tz'=>'America/Chicago','name'=>'America, Chicago (GMT-05:00)'],

			['tz'=>'America/Eirunepe','name'=>'America, Eirunepe (GMT-05:00)'],

			['tz'=>'America/Guayaquil','name'=>'America, Guayaquil (GMT-05:00)'],

			['tz'=>'America/Indiana/Knox','name'=>'America, Indiana, Knox (GMT-05:00)'],

			['tz'=>'America/Indiana/Tell_City','name'=>'America, Indiana, Tell City (GMT-05:00)'],

			['tz'=>'America/Jamaica','name'=>'America, Jamaica (GMT-05:00)'],

			['tz'=>'America/Lima','name'=>'America, Lima (GMT-05:00)'],

			['tz'=>'America/Matamoros','name'=>'America, Matamoros (GMT-05:00)'],

			['tz'=>'America/Menominee','name'=>'America, Menominee (GMT-05:00)'],

			['tz'=>'America/Merida','name'=>'America, Merida (GMT-05:00)'],

			['tz'=>'America/Mexico_City','name'=>'America, Mexico City (GMT-05:00)'],

			['tz'=>'America/Monterrey','name'=>'America, Monterrey (GMT-05:00)'],

			['tz'=>'America/North_Dakota/Beulah','name'=>'America, North Dakota, Beulah (GMT-05:00)'],

			['tz'=>'America/North_Dakota/Center','name'=>'America, North Dakota, Center (GMT-05:00)'],

			['tz'=>'America/North_Dakota/New_Salem','name'=>'America, North Dakota, New Salem (GMT-05:00)'],

			['tz'=>'America/Panama','name'=>'America, Panama (GMT-05:00)'],

			['tz'=>'America/Port-au-Prince','name'=>'America, Port-au-Prince (GMT-05:00)'],

			['tz'=>'America/Rainy_River','name'=>'America, Rainy River (GMT-05:00)'],

			['tz'=>'America/Rankin_Inlet','name'=>'America, Rankin Inlet (GMT-05:00)'],

			['tz'=>'America/Resolute','name'=>'America, Resolute (GMT-05:00)'],

			['tz'=>'America/Rio_Branco','name'=>'America, Rio Branco (GMT-05:00)'],

			['tz'=>'America/Winnipeg','name'=>'America, Winnipeg (GMT-05:00)'],

			['tz'=>'Pacific/Easter','name'=>'Pacific, Easter (GMT-05:00)'],

			['tz'=>'America/Anguilla','name'=>'America, Anguilla (GMT-04:00)'],

			['tz'=>'America/Antigua','name'=>'America, Antigua (GMT-04:00)'],

			['tz'=>'America/Aruba','name'=>'America, Aruba (GMT-04:00)'],

			['tz'=>'America/Asuncion','name'=>'America, Asuncion (GMT-04:00)'],

			['tz'=>'America/Barbados','name'=>'America, Barbados (GMT-04:00)'],

			['tz'=>'America/Blanc-Sablon','name'=>'America, Blanc-Sablon (GMT-04:00)'],

			['tz'=>'America/Boa_Vista','name'=>'America, Boa Vista (GMT-04:00)'],

			['tz'=>'America/Campo_Grande','name'=>'America, Campo Grande (GMT-04:00)'],

			['tz'=>'America/Caracas','name'=>'America, Caracas (GMT-04:00)'],

			['tz'=>'America/Cuiaba','name'=>'America, Cuiaba (GMT-04:00)'],

			['tz'=>'America/Curacao','name'=>'America, Curacao (GMT-04:00)'],

			['tz'=>'America/Detroit','name'=>'America, Detroit (GMT-04:00)'],

			['tz'=>'America/Dominica','name'=>'America, Dominica (GMT-04:00)'],

			['tz'=>'America/Grand_Turk','name'=>'America, Grand Turk (GMT-04:00)'],

			['tz'=>'America/Grenada','name'=>'America, Grenada (GMT-04:00)'],

			['tz'=>'America/Guadeloupe','name'=>'America, Guadeloupe (GMT-04:00)'],

			['tz'=>'America/Guyana','name'=>'America, Guyana (GMT-04:00)'],

			['tz'=>'America/Havana','name'=>'America, Havana (GMT-04:00)'],

			['tz'=>'America/Indiana/Indianapolis','name'=>'America, Indiana, Indianapolis (GMT-04:00)'],

			['tz'=>'America/Indiana/Marengo','name'=>'America, Indiana, Marengo (GMT-04:00)'],

			['tz'=>'America/Indiana/Petersburg','name'=>'America, Indiana, Petersburg (GMT-04:00)'],

			['tz'=>'America/Indiana/Vevay','name'=>'America, Indiana, Vevay (GMT-04:00)'],

			['tz'=>'America/Indiana/Vincennes','name'=>'America, Indiana, Vincennes (GMT-04:00)'],

			['tz'=>'America/Indiana/Winamac','name'=>'America, Indiana, Winamac (GMT-04:00)'],

			['tz'=>'America/Iqaluit','name'=>'America, Iqaluit (GMT-04:00)'],

			['tz'=>'America/Kentucky/Louisville','name'=>'America, Kentucky, Louisville (GMT-04:00)'],

			['tz'=>'America/Kentucky/Monticello','name'=>'America, Kentucky, Monticello (GMT-04:00)'],

			['tz'=>'America/Kralendijk','name'=>'America, Kralendijk (GMT-04:00)'],

			['tz'=>'America/La_Paz','name'=>'America, La Paz (GMT-04:00)'],

			['tz'=>'America/Lower_Princes','name'=>'America, Lower Princes (GMT-04:00)'],

			['tz'=>'America/Manaus','name'=>'America, Manaus (GMT-04:00)'],

			['tz'=>'America/Marigot','name'=>'America, Marigot (GMT-04:00)'],

			['tz'=>'America/Martinique','name'=>'America, Martinique (GMT-04:00)'],

			['tz'=>'America/Montserrat','name'=>'America, Montserrat (GMT-04:00)'],

			['tz'=>'America/Nassau','name'=>'America, Nassau (GMT-04:00)'],

			['tz'=>'America/New_York','name'=>'America, New York (GMT-04:00)'],

			['tz'=>'America/Nipigon','name'=>'America, Nipigon (GMT-04:00)'],

			['tz'=>'America/Pangnirtung','name'=>'America, Pangnirtung (GMT-04:00)'],

			['tz'=>'America/Port_of_Spain','name'=>'America, Port of Spain (GMT-04:00)'],

			['tz'=>'America/Porto_Velho','name'=>'America, Porto Velho (GMT-04:00)'],

			['tz'=>'America/Puerto_Rico','name'=>'America, Puerto Rico (GMT-04:00)'],

			['tz'=>'America/Santo_Domingo','name'=>'America, Santo Domingo (GMT-04:00)'],

			['tz'=>'America/St_Barthelemy','name'=>'America, St. Barthelemy (GMT-04:00)'],

			['tz'=>'America/St_Kitts','name'=>'America, St. Kitts (GMT-04:00)'],

			['tz'=>'America/St_Lucia','name'=>'America, St. Lucia (GMT-04:00)'],

			['tz'=>'America/St_Thomas','name'=>'America, St. Thomas (GMT-04:00)'],

			['tz'=>'America/St_Vincent','name'=>'America, St. Vincent (GMT-04:00)'],

			['tz'=>'America/Thunder_Bay','name'=>'America, Thunder Bay (GMT-04:00)'],

			['tz'=>'America/Toronto','name'=>'America, Toronto (GMT-04:00)'],

			['tz'=>'America/Tortola','name'=>'America, Tortola (GMT-04:00)'],

			['tz'=>'America/Araguaina','name'=>'America, Araguaina (GMT-03:00)'],

			['tz'=>'America/Argentina/Buenos_Aires','name'=>'America, Argentina, Buenos Aires (GMT-03:00)'],

			['tz'=>'America/Argentina/Catamarca','name'=>'America, Argentina, Catamarca (GMT-03:00)'],

			['tz'=>'America/Argentina/Cordoba','name'=>'America, Argentina, Cordoba (GMT-03:00)'],

			['tz'=>'America/Argentina/Jujuy','name'=>'America, Argentina, Jujuy (GMT-03:00)'],

			['tz'=>'America/Argentina/La_Rioja','name'=>'America, Argentina, La Rioja (GMT-03:00)'],

			['tz'=>'America/Argentina/Mendoza','name'=>'America, Argentina, Mendoza (GMT-03:00)'],

			['tz'=>'America/Argentina/Rio_Gallegos','name'=>'America, Argentina, Rio Gallegos (GMT-03:00)'],

			['tz'=>'America/Argentina/Salta','name'=>'America, Argentina, Salta (GMT-03:00)'],

			['tz'=>'America/Argentina/San_Juan','name'=>'America, Argentina, San Juan (GMT-03:00)'],

			['tz'=>'America/Argentina/San_Luis','name'=>'America, Argentina, San Luis (GMT-03:00)'],

			['tz'=>'America/Argentina/Tucuman','name'=>'America, Argentina, Tucuman (GMT-03:00)'],

			['tz'=>'America/Argentina/Ushuaia','name'=>'America, Argentina, Ushuaia (GMT-03:00)'],

			['tz'=>'America/Bahia','name'=>'America, Bahia (GMT-03:00)'],

			['tz'=>'America/Belem','name'=>'America, Belem (GMT-03:00)'],

			['tz'=>'America/Cayenne','name'=>'America, Cayenne (GMT-03:00)'],

			['tz'=>'America/Fortaleza','name'=>'America, Fortaleza (GMT-03:00)'],

			['tz'=>'America/Glace_Bay','name'=>'America, Glace Bay (GMT-03:00)'],

			['tz'=>'America/Goose_Bay','name'=>'America, Goose Bay (GMT-03:00)'],

			['tz'=>'America/Halifax','name'=>'America, Halifax (GMT-03:00)'],

			['tz'=>'America/Maceio','name'=>'America, Maceio (GMT-03:00)'],

			['tz'=>'America/Moncton','name'=>'America, Moncton (GMT-03:00)'],

			['tz'=>'America/Montevideo','name'=>'America, Montevideo (GMT-03:00)'],

			['tz'=>'America/Paramaribo','name'=>'America, Paramaribo (GMT-03:00)'],

			['tz'=>'America/Recife','name'=>'America, Recife (GMT-03:00)'],

			['tz'=>'America/Santarem','name'=>'America, Santarem (GMT-03:00)'],

			['tz'=>'America/Santiago','name'=>'America, Santiago (GMT-03:00)'],

			['tz'=>'America/Sao_Paulo','name'=>'America, Sao Paulo (GMT-03:00)'],

			['tz'=>'America/Thule','name'=>'America, Thule (GMT-03:00)'],

			['tz'=>'Antarctica/Palmer','name'=>'Antarctica, Palmer (GMT-03:00)'],

			['tz'=>'Antarctica/Rothera','name'=>'Antarctica, Rothera (GMT-03:00)'],

			['tz'=>'Atlantic/Bermuda','name'=>'Atlantic, Bermuda (GMT-03:00)'],

			['tz'=>'Atlantic/Stanley','name'=>'Atlantic, Stanley (GMT-03:00)'],

			['tz'=>'America/St_Johns','name'=>'America, St. Johns (GMT-02:30)'],

			['tz'=>'America/Godthab','name'=>'America, Godthab (GMT-02:00)'],

			['tz'=>'America/Miquelon','name'=>'America, Miquelon (GMT-02:00)'],

			['tz'=>'America/Noronha','name'=>'America, Noronha (GMT-02:00)'],

			['tz'=>'Atlantic/South_Georgia','name'=>'Atlantic, South Georgia (GMT-02:00)'],

			['tz'=>'Atlantic/Cape_Verde','name'=>'Atlantic, Cape Verde (GMT-01:00)'],

			['tz'=>'Africa/Abidjan','name'=>'Africa, Abidjan (GMT)'],

			['tz'=>'Africa/Accra','name'=>'Africa, Accra (GMT)'],

			['tz'=>'Africa/Bamako','name'=>'Africa, Bamako (GMT)'],

			['tz'=>'Africa/Banjul','name'=>'Africa, Banjul (GMT)'],

			['tz'=>'Africa/Bissau','name'=>'Africa, Bissau (GMT)'],

			['tz'=>'Africa/Conakry','name'=>'Africa, Conakry (GMT)'],

			['tz'=>'Africa/Dakar','name'=>'Africa, Dakar (GMT)'],

			['tz'=>'Africa/Freetown','name'=>'Africa, Freetown (GMT)'],

			['tz'=>'Africa/Lome','name'=>'Africa, Lome (GMT)'],

			['tz'=>'Africa/Monrovia','name'=>'Africa, Monrovia (GMT)'],

			['tz'=>'Africa/Nouakchott','name'=>'Africa, Nouakchott (GMT)'],

			['tz'=>'Africa/Ouagadougou','name'=>'Africa, Ouagadougou (GMT)'],

			['tz'=>'Africa/Sao_Tome','name'=>'Africa, Sao Tome (GMT)'],

			['tz'=>'America/Danmarkshavn','name'=>'America, Danmarkshavn (GMT)'],

			['tz'=>'America/Scoresbysund','name'=>'America, Scoresbysund (GMT)'],

			['tz'=>'Atlantic/Azores','name'=>'Atlantic, Azores (GMT)'],

			['tz'=>'Atlantic/Reykjavik','name'=>'Atlantic, Reykjavik (GMT)'],

			['tz'=>'Atlantic/St_Helena','name'=>'Atlantic, St. Helena (GMT)'],

			['tz'=>'UTC','name'=>'UTC (GMT)'],

			['tz'=>'Africa/Algiers','name'=>'Africa, Algiers (GMT+01:00)'],

			['tz'=>'Africa/Bangui','name'=>'Africa, Bangui (GMT+01:00)'],

			['tz'=>'Africa/Brazzaville','name'=>'Africa, Brazzaville (GMT+01:00)'],

			['tz'=>'Africa/Casablanca','name'=>'Africa, Casablanca (GMT+01:00)'],

			['tz'=>'Africa/Douala','name'=>'Africa, Douala (GMT+01:00)'],

			['tz'=>'Africa/El_Aaiun','name'=>'Africa, El Aaiun (GMT+01:00)'],

			['tz'=>'Africa/Kinshasa','name'=>'Africa, Kinshasa (GMT+01:00)'],

			['tz'=>'Africa/Lagos','name'=>'Africa, Lagos (GMT+01:00)'],

			['tz'=>'Africa/Libreville','name'=>'Africa, Libreville (GMT+01:00)'],

			['tz'=>'Africa/Luanda','name'=>'Africa, Luanda (GMT+01:00)'],

			['tz'=>'Africa/Malabo','name'=>'Africa, Malabo (GMT+01:00)'],

			['tz'=>'Africa/Ndjamena','name'=>'Africa, Ndjamena (GMT+01:00)'],

			['tz'=>'Africa/Niamey','name'=>'Africa, Niamey (GMT+01:00)'],

			['tz'=>'Africa/Porto-Novo','name'=>'Africa, Porto-Novo (GMT+01:00)'],

			['tz'=>'Africa/Tunis','name'=>'Africa, Tunis (GMT+01:00)'],

			['tz'=>'Africa/Windhoek','name'=>'Africa, Windhoek (GMT+01:00)'],

			['tz'=>'Atlantic/Canary','name'=>'Atlantic, Canary (GMT+01:00)'],

			['tz'=>'Atlantic/Faroe','name'=>'Atlantic, Faroe (GMT+01:00)'],

			['tz'=>'Atlantic/Madeira','name'=>'Atlantic, Madeira (GMT+01:00)'],

			['tz'=>'Europe/Dublin','name'=>'Europe, Dublin (GMT+01:00)'],

			['tz'=>'Europe/Guernsey','name'=>'Europe, Guernsey (GMT+01:00)'],

			['tz'=>'Europe/Isle_of_Man','name'=>'Europe, Isle of Man (GMT+01:00)'],

			['tz'=>'Europe/Jersey','name'=>'Europe, Jersey (GMT+01:00)'],

			['tz'=>'Europe/Lisbon','name'=>'Europe, Lisbon (GMT+01:00)'],

			['tz'=>'Europe/London','name'=>'Europe, London (GMT+01:00)'],

			['tz'=>'Africa/Blantyre','name'=>'Africa, Blantyre (GMT+02:00)'],

			['tz'=>'Africa/Bujumbura','name'=>'Africa, Bujumbura (GMT+02:00)'],

			['tz'=>'Africa/Cairo','name'=>'Africa, Cairo (GMT+02:00)'],

			['tz'=>'Africa/Ceuta','name'=>'Africa, Ceuta (GMT+02:00)'],

			['tz'=>'Africa/Gaborone','name'=>'Africa, Gaborone (GMT+02:00)'],

			['tz'=>'Africa/Harare','name'=>'Africa, Harare (GMT+02:00)'],

			['tz'=>'Africa/Johannesburg','name'=>'Africa, Johannesburg (GMT+02:00)'],

			['tz'=>'Africa/Kigali','name'=>'Africa, Kigali (GMT+02:00)'],

			['tz'=>'Africa/Lubumbashi','name'=>'Africa, Lubumbashi (GMT+02:00)'],

			['tz'=>'Africa/Lusaka','name'=>'Africa, Lusaka (GMT+02:00)'],

			['tz'=>'Africa/Maputo','name'=>'Africa, Maputo (GMT+02:00)'],

			['tz'=>'Africa/Maseru','name'=>'Africa, Maseru (GMT+02:00)'],

			['tz'=>'Africa/Mbabane','name'=>'Africa, Mbabane (GMT+02:00)'],

			['tz'=>'Africa/Tripoli','name'=>'Africa, Tripoli (GMT+02:00)'],

			['tz'=>'Antarctica/Troll','name'=>'Antarctica, Troll (GMT+02:00)'],

			['tz'=>'Arctic/Longyearbyen','name'=>'Arctic, Longyearbyen (GMT+02:00)'],

			['tz'=>'Europe/Amsterdam','name'=>'Europe, Amsterdam (GMT+02:00)'],

			['tz'=>'Europe/Andorra','name'=>'Europe, Andorra (GMT+02:00)'],

			['tz'=>'Europe/Belgrade','name'=>'Europe, Belgrade (GMT+02:00)'],

			['tz'=>'Europe/Berlin','name'=>'Europe, Berlin (GMT+02:00)'],

			['tz'=>'Europe/Bratislava','name'=>'Europe, Bratislava (GMT+02:00)'],

			['tz'=>'Europe/Brussels','name'=>'Europe, Brussels (GMT+02:00)'],

			['tz'=>'Europe/Budapest','name'=>'Europe, Budapest (GMT+02:00)'],

			['tz'=>'Europe/Busingen','name'=>'Europe, Busingen (GMT+02:00)'],

			['tz'=>'Europe/Copenhagen','name'=>'Europe, Copenhagen (GMT+02:00)'],

			['tz'=>'Europe/Gibraltar','name'=>'Europe, Gibraltar (GMT+02:00)'],

			['tz'=>'Europe/Kaliningrad','name'=>'Europe, Kaliningrad (GMT+02:00)'],

			['tz'=>'Europe/Ljubljana','name'=>'Europe, Ljubljana (GMT+02:00)'],

			['tz'=>'Europe/Luxembourg','name'=>'Europe, Luxembourg (GMT+02:00)'],

			['tz'=>'Europe/Madrid','name'=>'Europe, Madrid (GMT+02:00)'],

			['tz'=>'Europe/Malta','name'=>'Europe, Malta (GMT+02:00)'],

			['tz'=>'Europe/Monaco','name'=>'Europe, Monaco (GMT+02:00)'],

			['tz'=>'Europe/Oslo','name'=>'Europe, Oslo (GMT+02:00)'],

			['tz'=>'Europe/Paris','name'=>'Europe, Paris (GMT+02:00)'],

			['tz'=>'Europe/Podgorica','name'=>'Europe, Podgorica (GMT+02:00)'],

			['tz'=>'Europe/Prague','name'=>'Europe, Prague (GMT+02:00)'],

			['tz'=>'Europe/Rome','name'=>'Europe, Rome (GMT+02:00)'],

			['tz'=>'Europe/San_Marino','name'=>'Europe, San Marino (GMT+02:00)'],

			['tz'=>'Europe/Sarajevo','name'=>'Europe, Sarajevo (GMT+02:00)'],

			['tz'=>'Europe/Skopje','name'=>'Europe, Skopje (GMT+02:00)'],

			['tz'=>'Europe/Stockholm','name'=>'Europe, Stockholm (GMT+02:00)'],

			['tz'=>'Europe/Tirane','name'=>'Europe, Tirane (GMT+02:00)'],

			['tz'=>'Europe/Vaduz','name'=>'Europe, Vaduz (GMT+02:00)'],

			['tz'=>'Europe/Vatican','name'=>'Europe, Vatican (GMT+02:00)'],

			['tz'=>'Europe/Vienna','name'=>'Europe, Vienna (GMT+02:00)'],

			['tz'=>'Europe/Warsaw','name'=>'Europe, Warsaw (GMT+02:00)'],

			['tz'=>'Europe/Zagreb','name'=>'Europe, Zagreb (GMT+02:00)'],

			['tz'=>'Europe/Zurich','name'=>'Europe, Zurich (GMT+02:00)'],

			['tz'=>'Africa/Addis_Ababa','name'=>'Africa, Addis Ababa (GMT+03:00)'],

			['tz'=>'Africa/Asmara','name'=>'Africa, Asmara (GMT+03:00)'],

			['tz'=>'Africa/Dar_es_Salaam','name'=>'Africa, Dar es Salaam (GMT+03:00)'],

			['tz'=>'Africa/Djibouti','name'=>'Africa, Djibouti (GMT+03:00)'],

			['tz'=>'Africa/Juba','name'=>'Africa, Juba (GMT+03:00)'],

			['tz'=>'Africa/Kampala','name'=>'Africa, Kampala (GMT+03:00)'],

			['tz'=>'Africa/Khartoum','name'=>'Africa, Khartoum (GMT+03:00)'],

			['tz'=>'Africa/Mogadishu','name'=>'Africa, Mogadishu (GMT+03:00)'],

			['tz'=>'Africa/Nairobi','name'=>'Africa, Nairobi (GMT+03:00)'],

			['tz'=>'Antarctica/Syowa','name'=>'Antarctica, Syowa (GMT+03:00)'],

			['tz'=>'Asia/Aden','name'=>'Asia, Aden (GMT+03:00)'],

			['tz'=>'Asia/Amman','name'=>'Asia, Amman (GMT+03:00)'],

			['tz'=>'Asia/Baghdad','name'=>'Asia, Baghdad (GMT+03:00)'],

			['tz'=>'Asia/Bahrain','name'=>'Asia, Bahrain (GMT+03:00)'],

			['tz'=>'Asia/Beirut','name'=>'Asia, Beirut (GMT+03:00)'],

			['tz'=>'Asia/Damascus','name'=>'Asia, Damascus (GMT+03:00)'],

			['tz'=>'Asia/Famagusta','name'=>'Asia, Famagusta (GMT+03:00)'],

			['tz'=>'Asia/Gaza','name'=>'Asia, Gaza (GMT+03:00)'],

			['tz'=>'Asia/Hebron','name'=>'Asia, Hebron (GMT+03:00)'],

			['tz'=>'Asia/Jerusalem','name'=>'Asia, Jerusalem (GMT+03:00)'],

			['tz'=>'Asia/Kuwait','name'=>'Asia, Kuwait (GMT+03:00)'],

			['tz'=>'Asia/Nicosia','name'=>'Asia, Nicosia (GMT+03:00)'],

			['tz'=>'Asia/Qatar','name'=>'Asia, Qatar (GMT+03:00)'],

			['tz'=>'Asia/Riyadh','name'=>'Asia, Riyadh (GMT+03:00)'],

			['tz'=>'Europe/Athens','name'=>'Europe, Athens (GMT+03:00)'],

			['tz'=>'Europe/Bucharest','name'=>'Europe, Bucharest (GMT+03:00)'],

			['tz'=>'Europe/Chisinau','name'=>'Europe, Chisinau (GMT+03:00)'],

			['tz'=>'Europe/Helsinki','name'=>'Europe, Helsinki (GMT+03:00)'],

			['tz'=>'Europe/Istanbul','name'=>'Europe, Istanbul (GMT+03:00)'],

			['tz'=>'Europe/Kiev','name'=>'Europe, Kiev (GMT+03:00)'],

			['tz'=>'Europe/Kirov','name'=>'Europe, Kirov (GMT+03:00)'],

			['tz'=>'Europe/Mariehamn','name'=>'Europe, Mariehamn (GMT+03:00)'],

			['tz'=>'Europe/Minsk','name'=>'Europe, Minsk (GMT+03:00)'],

			['tz'=>'Europe/Moscow','name'=>'Europe, Moscow (GMT+03:00)'],

			['tz'=>'Europe/Riga','name'=>'Europe, Riga (GMT+03:00)'],

			['tz'=>'Europe/Simferopol','name'=>'Europe, Simferopol (GMT+03:00)'],

			['tz'=>'Europe/Sofia','name'=>'Europe, Sofia (GMT+03:00)'],

			['tz'=>'Europe/Tallinn','name'=>'Europe, Tallinn (GMT+03:00)'],

			['tz'=>'Europe/Uzhgorod','name'=>'Europe, Uzhgorod (GMT+03:00)'],

			['tz'=>'Europe/Vilnius','name'=>'Europe, Vilnius (GMT+03:00)'],

			['tz'=>'Europe/Volgograd','name'=>'Europe, Volgograd (GMT+03:00)'],

			['tz'=>'Europe/Zaporozhye','name'=>'Europe, Zaporozhye (GMT+03:00)'],

			['tz'=>'Indian/Antananarivo','name'=>'Indian, Antananarivo (GMT+03:00)'],

			['tz'=>'Indian/Comoro','name'=>'Indian, Comoro (GMT+03:00)'],

			['tz'=>'Indian/Mayotte','name'=>'Indian, Mayotte (GMT+03:00)'],

			['tz'=>'Asia/Baku','name'=>'Asia, Baku (GMT+04:00)'],

			['tz'=>'Asia/Dubai','name'=>'Asia, Dubai (GMT+04:00)'],

			['tz'=>'Asia/Muscat','name'=>'Asia, Muscat (GMT+04:00)'],

			['tz'=>'Asia/Tbilisi','name'=>'Asia, Tbilisi (GMT+04:00)'],

			['tz'=>'Asia/Yerevan','name'=>'Asia, Yerevan (GMT+04:00)'],

			['tz'=>'Europe/Astrakhan','name'=>'Europe, Astrakhan (GMT+04:00)'],

			['tz'=>'Europe/Samara','name'=>'Europe, Samara (GMT+04:00)'],

			['tz'=>'Europe/Saratov','name'=>'Europe, Saratov (GMT+04:00)'],

			['tz'=>'Europe/Ulyanovsk','name'=>'Europe, Ulyanovsk (GMT+04:00)'],

			['tz'=>'Indian/Mahe','name'=>'Indian, Mahe (GMT+04:00)'],

			['tz'=>'Indian/Mauritius','name'=>'Indian, Mauritius (GMT+04:00)'],

			['tz'=>'Indian/Reunion','name'=>'Indian, Reunion (GMT+04:00)'],

			['tz'=>'Asia/Kabul','name'=>'Asia, Kabul (GMT+04:30)'],

			['tz'=>'Asia/Tehran','name'=>'Asia, Tehran (GMT+04:30)'],

			['tz'=>'Antarctica/Mawson','name'=>'Antarctica, Mawson (GMT+05:00)'],

			['tz'=>'Asia/Aqtau','name'=>'Asia, Aqtau (GMT+05:00)'],

			['tz'=>'Asia/Aqtobe','name'=>'Asia, Aqtobe (GMT+05:00)'],

			['tz'=>'Asia/Ashgabat','name'=>'Asia, Ashgabat (GMT+05:00)'],

			['tz'=>'Asia/Atyrau','name'=>'Asia, Atyrau (GMT+05:00)'],

			['tz'=>'Asia/Dushanbe','name'=>'Asia, Dushanbe (GMT+05:00)'],

			['tz'=>'Asia/Karachi','name'=>'Asia, Karachi (GMT+05:00)'],

			['tz'=>'Asia/Oral','name'=>'Asia, Oral (GMT+05:00)'],

			['tz'=>'Asia/Samarkand','name'=>'Asia, Samarkand (GMT+05:00)'],

			['tz'=>'Asia/Tashkent','name'=>'Asia, Tashkent (GMT+05:00)'],

			['tz'=>'Asia/Yekaterinburg','name'=>'Asia, Yekaterinburg (GMT+05:00)'],

			['tz'=>'Indian/Kerguelen','name'=>'Indian, Kerguelen (GMT+05:00)'],

			['tz'=>'Indian/Maldives','name'=>'Indian, Maldives (GMT+05:00)'],

			['tz'=>'Asia/Colombo','name'=>'Asia, Colombo (GMT+05:30)'],

			['tz'=>'Asia/Kolkata','name'=>'Asia, Kolkata (GMT+05:30)'],

			['tz'=>'Asia/Kathmandu','name'=>'Asia, Kathmandu (GMT+05:45)'],

			['tz'=>'Antarctica/Vostok','name'=>'Antarctica, Vostok (GMT+06:00)'],

			['tz'=>'Asia/Almaty','name'=>'Asia, Almaty (GMT+06:00)'],

			['tz'=>'Asia/Bishkek','name'=>'Asia, Bishkek (GMT+06:00)'],

			['tz'=>'Asia/Dhaka','name'=>'Asia, Dhaka (GMT+06:00)'],

			['tz'=>'Asia/Omsk','name'=>'Asia, Omsk (GMT+06:00)'],

			['tz'=>'Asia/Qyzylorda','name'=>'Asia, Qyzylorda (GMT+06:00)'],

			['tz'=>'Asia/Thimphu','name'=>'Asia, Thimphu (GMT+06:00)'],

			['tz'=>'Asia/Urumqi','name'=>'Asia, Urumqi (GMT+06:00)'],

			['tz'=>'Indian/Chagos','name'=>'Indian, Chagos (GMT+06:00)'],

			['tz'=>'Asia/Yangon','name'=>'Asia, Yangon (GMT+06:30)'],

			['tz'=>'Indian/Cocos','name'=>'Indian, Cocos (GMT+06:30)'],

			['tz'=>'Antarctica/Davis','name'=>'Antarctica, Davis (GMT+07:00)'],

			['tz'=>'Asia/Bangkok','name'=>'Asia, Bangkok (GMT+07:00)'],

			['tz'=>'Asia/Barnaul','name'=>'Asia, Barnaul (GMT+07:00)'],

			['tz'=>'Asia/Ho_Chi_Minh','name'=>'Asia, Ho Chi Minh (GMT+07:00)'],

			['tz'=>'Asia/Jakarta','name'=>'Asia, Jakarta (GMT+07:00)'],

			['tz'=>'Asia/Krasnoyarsk','name'=>'Asia, Krasnoyarsk (GMT+07:00)'],

			['tz'=>'Asia/Novokuznetsk','name'=>'Asia, Novokuznetsk (GMT+07:00)'],

			['tz'=>'Asia/Novosibirsk','name'=>'Asia, Novosibirsk (GMT+07:00)'],

			['tz'=>'Asia/Phnom_Penh','name'=>'Asia, Phnom Penh (GMT+07:00)'],

			['tz'=>'Asia/Pontianak','name'=>'Asia, Pontianak (GMT+07:00)'],

			['tz'=>'Asia/Tomsk','name'=>'Asia, Tomsk (GMT+07:00)'],

			['tz'=>'Asia/Vientiane','name'=>'Asia, Vientiane (GMT+07:00)'],

			['tz'=>'Indian/Christmas','name'=>'Indian, Christmas (GMT+07:00)'],

			['tz'=>'Asia/Brunei','name'=>'Asia, Brunei (GMT+08:00)'],

			['tz'=>'Asia/Hong_Kong','name'=>'Asia, Hong Kong (GMT+08:00)'],

			['tz'=>'Asia/Hovd','name'=>'Asia, Hovd (GMT+08:00)'],

			['tz'=>'Asia/Irkutsk','name'=>'Asia, Irkutsk (GMT+08:00)'],

			['tz'=>'Asia/Kuala_Lumpur','name'=>'Asia, Kuala Lumpur (GMT+08:00)'],

			['tz'=>'Asia/Kuching','name'=>'Asia, Kuching (GMT+08:00)'],

			['tz'=>'Asia/Macau','name'=>'Asia, Macau (GMT+08:00)'],

			['tz'=>'Asia/Makassar','name'=>'Asia, Makassar (GMT+08:00)'],

			['tz'=>'Asia/Manila','name'=>'Asia, Manila (GMT+08:00)'],

			['tz'=>'Asia/Shanghai','name'=>'Asia, Shanghai (GMT+08:00)'],

			['tz'=>'Asia/Singapore','name'=>'Asia, Singapore (GMT+08:00)'],

			['tz'=>'Asia/Taipei','name'=>'Asia, Taipei (GMT+08:00)'],

			['tz'=>'Australia/Perth','name'=>'Australia, Perth (GMT+08:00)'],

			['tz'=>'Asia/Pyongyang','name'=>'Asia, Pyongyang (GMT+08:30)'],

			['tz'=>'Australia/Eucla','name'=>'Australia, Eucla (GMT+08:45)'],

			['tz'=>'Asia/Chita','name'=>'Asia, Chita (GMT+09:00)'],

			['tz'=>'Asia/Choibalsan','name'=>'Asia, Choibalsan (GMT+09:00)'],

			['tz'=>'Asia/Dili','name'=>'Asia, Dili (GMT+09:00)'],

			['tz'=>'Asia/Jayapura','name'=>'Asia, Jayapura (GMT+09:00)'],

			['tz'=>'Asia/Khandyga','name'=>'Asia, Khandyga (GMT+09:00)'],

			['tz'=>'Asia/Seoul','name'=>'Asia, Seoul (GMT+09:00)'],

			['tz'=>'Asia/Tokyo','name'=>'Asia, Tokyo (GMT+09:00)'],

			['tz'=>'Asia/Ulaanbaatar','name'=>'Asia, Ulaanbaatar (GMT+09:00)'],

			['tz'=>'Asia/Yakutsk','name'=>'Asia, Yakutsk (GMT+09:00)'],

			['tz'=>'Pacific/Palau','name'=>'Pacific, Palau (GMT+09:00)'],

			['tz'=>'Australia/Adelaide','name'=>'Australia, Adelaide (GMT+09:30)'],

			['tz'=>'Australia/Broken_Hill','name'=>'Australia, Broken Hill (GMT+09:30)'],

			['tz'=>'Australia/Darwin','name'=>'Australia, Darwin (GMT+09:30)'],

			['tz'=>'Antarctica/DumontDUrville','name'=>'Antarctica, DumontDUrville (GMT+10:00)'],

			['tz'=>'Asia/Ust-Nera','name'=>'Asia, Ust-Nera (GMT+10:00)'],

			['tz'=>'Asia/Vladivostok','name'=>'Asia, Vladivostok (GMT+10:00)'],

			['tz'=>'Australia/Brisbane','name'=>'Australia, Brisbane (GMT+10:00)'],

			['tz'=>'Australia/Currie','name'=>'Australia, Currie (GMT+10:00)'],

			['tz'=>'Australia/Hobart','name'=>'Australia, Hobart (GMT+10:00)'],

			['tz'=>'Australia/Lindeman','name'=>'Australia, Lindeman (GMT+10:00)'],

			['tz'=>'Australia/Melbourne','name'=>'Australia, Melbourne (GMT+10:00)'],

			['tz'=>'Australia/Sydney','name'=>'Australia, Sydney (GMT+10:00)'],

			['tz'=>'Pacific/Chuuk','name'=>'Pacific, Chuuk (GMT+10:00)'],

			['tz'=>'Pacific/Guam','name'=>'Pacific, Guam (GMT+10:00)'],

			['tz'=>'Pacific/Port_Moresby','name'=>'Pacific, Port Moresby (GMT+10:00)'],

			['tz'=>'Pacific/Saipan','name'=>'Pacific, Saipan (GMT+10:00)'],

			['tz'=>'Australia/Lord_Howe','name'=>'Australia, Lord Howe (GMT+10:30)'],

			['tz'=>'Antarctica/Casey','name'=>'Antarctica, Casey (GMT+11:00)'],

			['tz'=>'Antarctica/Macquarie','name'=>'Antarctica, Macquarie (GMT+11:00)'],

			['tz'=>'Asia/Magadan','name'=>'Asia, Magadan (GMT+11:00)'],

			['tz'=>'Asia/Sakhalin','name'=>'Asia, Sakhalin (GMT+11:00)'],

			['tz'=>'Asia/Srednekolymsk','name'=>'Asia, Srednekolymsk (GMT+11:00)'],

			['tz'=>'Pacific/Bougainville','name'=>'Pacific, Bougainville (GMT+11:00)'],

			['tz'=>'Pacific/Efate','name'=>'Pacific, Efate (GMT+11:00)'],

			['tz'=>'Pacific/Guadalcanal','name'=>'Pacific, Guadalcanal (GMT+11:00)'],

			['tz'=>'Pacific/Kosrae','name'=>'Pacific, Kosrae (GMT+11:00)'],

			['tz'=>'Pacific/Norfolk','name'=>'Pacific, Norfolk (GMT+11:00)'],

			['tz'=>'Pacific/Noumea','name'=>'Pacific, Noumea (GMT+11:00)'],

			['tz'=>'Pacific/Pohnpei','name'=>'Pacific, Pohnpei (GMT+11:00)'],

			['tz'=>'Antarctica/McMurdo','name'=>'Antarctica, McMurdo (GMT+12:00)'],

			['tz'=>'Asia/Anadyr','name'=>'Asia, Anadyr (GMT+12:00)'],

			['tz'=>'Asia/Kamchatka','name'=>'Asia, Kamchatka (GMT+12:00)'],

			['tz'=>'Pacific/Auckland','name'=>'Pacific, Auckland (GMT+12:00)'],

			['tz'=>'Pacific/Fiji','name'=>'Pacific, Fiji (GMT+12:00)'],

			['tz'=>'Pacific/Funafuti','name'=>'Pacific, Funafuti (GMT+12:00)'],

			['tz'=>'Pacific/Kwajalein','name'=>'Pacific, Kwajalein (GMT+12:00)'],

			['tz'=>'Pacific/Majuro','name'=>'Pacific, Majuro (GMT+12:00)'],

			['tz'=>'Pacific/Nauru','name'=>'Pacific, Nauru (GMT+12:00)'],

			['tz'=>'Pacific/Tarawa','name'=>'Pacific, Tarawa (GMT+12:00)'],

			['tz'=>'Pacific/Wake','name'=>'Pacific, Wake (GMT+12:00)'],

			['tz'=>'Pacific/Wallis','name'=>'Pacific, Wallis (GMT+12:00)'],

			['tz'=>'Pacific/Chatham','name'=>'Pacific, Chatham (GMT+12:45)'],

			['tz'=>'Pacific/Apia','name'=>'Pacific, Apia (GMT+13:00)'],

			['tz'=>'Pacific/Enderbury','name'=>'Pacific, Enderbury (GMT+13:00)'],

			['tz'=>'Pacific/Fakaofo','name'=>'Pacific, Fakaofo (GMT+13:00)'],

			['tz'=>'Pacific/Tongatapu','name'=>'Pacific, Tongatapu (GMT+13:00)'],

			['tz'=>'Pacific/Kiritimati','name'=>'Pacific, Kiritimati (GMT+14:00)'],

        );

			foreach ($timezones as $key => $value) {
                $data=$value;
                $data['id']=$key+1;
                DB::table('timezones')->insert($data); 
    		}

    }
}
