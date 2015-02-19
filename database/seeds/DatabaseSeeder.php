<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('SeedTables');
        $this->command->info('tables seeded');
    }

}

Class SeedTables extends Seeder
{


    public function run()
    {
        DB::table('schools')->delete();
        DB::table('meets')->delete();
        DB::table('meet_schools')->delete();

        //Schools

        KalaheoTrack\School::create(["name" => "Aiea"]);
        KalaheoTrack\School::create(["name" => "Anuenue"]);
        KalaheoTrack\School::create(["name" => "Campbell"]);
        KalaheoTrack\School::create(["name" => "Castle"]);
        KalaheoTrack\School::create(["name" => "Farrington"]);
        KalaheoTrack\School::create(["name" => "Kahuku"]);
        KalaheoTrack\School::create(["name" => "Kailua"]);
        KalaheoTrack\School::create(["name" => "Kaimuki"]);
        KalaheoTrack\School::create(["name" => "Kaiser"]);
        KalaheoTrack\School::create(["name" => "Kalaheo"]);
        KalaheoTrack\School::create(["name" => "Kalani"]);
        KalaheoTrack\School::create(["name" => "Leilehua"]);
        KalaheoTrack\School::create(["name" => "Kapolei"]);
        KalaheoTrack\School::create(["name" => "McKinley"]);
        KalaheoTrack\School::create(["name" => "Mililani"]);
        KalaheoTrack\School::create(["name" => "Moanalua"]);
        KalaheoTrack\School::create(["name" => "Nanakuli"]);
        KalaheoTrack\School::create(["name" => "Pearl City"]);
        KalaheoTrack\School::create(["name" => "Radford"]);
        KalaheoTrack\School::create(["name" => "Roosevelt"]);
        KalaheoTrack\School::create(["name" => "Waialua"]);
        KalaheoTrack\School::create(["name" => "Waianae"]);
        KalaheoTrack\School::create(["name" => "Waipahu"]);

        //Let's make some meets

        KalaheoTrack\Meet::create([
            'title'=>'Practice Meet #1',
            'date'=>Carbon::createFromDate(2015, 2, 21),
            'start_time'=>'10:00AM',
            'location'=>20,
            'notes'=>'Running events only. No relays. No field events. No hurdles. Each school may bring 10 athletes. Kalaheo NOT ATTENDING.'
        ]);

        //Practice meet gets everyone
        KalaheoTrack\MeetSchool::create([ 'school_id'=>1,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>2,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>3,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>4,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>5,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>6,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>7,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>8,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>9,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>10,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>11,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>12,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>13,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>14,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>15,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>16,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>17,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>18,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>19,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>20,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>21,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>22,'meet_id'=>1]);
        KalaheoTrack\MeetSchool::create([ 'school_id'=>23,'meet_id'=>1]);

        //Week #1

        KalaheoTrack\Meet::create([
            'title'=>'Qualifying Meet #1',
            'date'=>Carbon::createFromDate(2015, 2, 28),
            'start_time'=>'2:00PM',
            'location'=>4,
            'notes'=>'No transportation. Please meet up in the Castle grandstands at 12:30PM.'
        ]);

            //Attendees
                KalaheoTrack\MeetSchool::create([ 'school_id'=>1,'meet_id'=>2]);
                KalaheoTrack\MeetSchool::create([ 'school_id'=>4,'meet_id'=>2]);
                KalaheoTrack\MeetSchool::create([ 'school_id'=>7,'meet_id'=>2]);
                KalaheoTrack\MeetSchool::create([ 'school_id'=>9,'meet_id'=>2]);
                KalaheoTrack\MeetSchool::create([ 'school_id'=>10,'meet_id'=>2]);
                KalaheoTrack\MeetSchool::create([ 'school_id'=>14,'meet_id'=>2]);
                KalaheoTrack\MeetSchool::create([ 'school_id'=>19,'meet_id'=>2]);
                KalaheoTrack\MeetSchool::create([ 'school_id'=>11,'meet_id'=>2]);
                KalaheoTrack\MeetSchool::create([ 'school_id'=>6,'meet_id'=>2]);


        //Now let's have some schools attend these meets


        KalaheoTrack\Meet::create([
            'title'=>'Qualifying Meet #2',
            'date'=>Carbon::createFromDate(2015, 3, 7),
            'start_time'=>'2:00PM',
            'location'=>4,
            'notes'=>'No transportation. Please meet up in the Castle grandstands at 12:30PM.'
        ]);

            //Attendees
            KalaheoTrack\MeetSchool::create([ 'school_id'=>2,'meet_id'=>3]);
            KalaheoTrack\MeetSchool::create([ 'school_id'=>4,'meet_id'=>3]);
            KalaheoTrack\MeetSchool::create([ 'school_id'=>7,'meet_id'=>3]);
            KalaheoTrack\MeetSchool::create([ 'school_id'=>9,'meet_id'=>3]);
            KalaheoTrack\MeetSchool::create([ 'school_id'=>10,'meet_id'=>3]);
            KalaheoTrack\MeetSchool::create([ 'school_id'=>11,'meet_id'=>3]);


        KalaheoTrack\Meet::create([
            'title'=>'Qualifying Meet #3',
            'date'=>Carbon::createFromDate(2015, 3, 14),
            'start_time'=>'2:00PM',
            'location'=>4,
            'notes'=>'No transportation. Please meet up in the Castle grandstands at 12:30PM.'
        ]);

            //Attendees
            KalaheoTrack\MeetSchool::create([ 'school_id'=>2,'meet_id'=>4]);
            KalaheoTrack\MeetSchool::create([ 'school_id'=>4,'meet_id'=>4]);
            KalaheoTrack\MeetSchool::create([ 'school_id'=>7,'meet_id'=>4]);
            KalaheoTrack\MeetSchool::create([ 'school_id'=>9,'meet_id'=>4]);
            KalaheoTrack\MeetSchool::create([ 'school_id'=>10,'meet_id'=>4]);
            KalaheoTrack\MeetSchool::create([ 'school_id'=>19,'meet_id'=>4]);


        KalaheoTrack\Meet::create([
            'title'=>'Cal Track/Ruby Tuesday Invitational',
            'date'=>Carbon::createFromDate(2015, 3, 21),
            'start_time'=>'8:30AM',
            'location'=>4,
            'notes'=>'Invitational meet against ILH schools. Bus leaves Kalaheo @7AM'
        ]);










    }




}

