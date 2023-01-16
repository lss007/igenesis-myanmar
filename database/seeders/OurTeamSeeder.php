<?php

namespace Database\Seeders;

use App\Models\OurTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $our_teams = array(
    array('name' => 'Manish Shrivastava','image' => '1755160957082260.jpg','position' => 'CEO/ASIA DIVISION HEAD','description' => '<p>CEO &amp; Asia Division Head at iGenesis is Mr Manish Shrivastava, who has served in armed services possessing rich and diverse experience in various sectors like Automobiles, Telecommunications and Infrastructures. In his career spanning over 25 plus years he has worked in companies like Tata Motors, Bharti, MTS, MAXIS, American Tower Corporation, Srei Infrastructure &amp; Tata Communications at various leadership positions. Manish is an avid reader and traveller.</p>','order_no' => '1','status' => '1','created_at' => now(),'updated_at' => now()),
    array('name' => 'Anuj Dagar','image' => '1755161009497652.jpg','position' => 'CHIEF OPERATING OFFICER - MYANMAR','description' => '<p>MR ANUJ DAGAR IS THE COO at iGenesis Myanmar, He comes with a rich and diverse experience of 16+ years in Business Development, Strategic Planning , Project roll out, Project Management ,budgeting, costing, site acquisition, Site engineering, Contract negotiations &amp; bidding, He held an experience in Cross-functiona l &amp; Cultural in Countries like Myanmar, Indonesia, and England.</p>
            <p>Mr. Dagar has been associated with Group since 2007 and in his mesmerizing tenure of 14 years he has successfully accomplished many tasks and contributed to the Organizational Growth and Development.</p>','order_no' => '2','status' => '1','created_at' => now(),'updated_at' => now()),
    array('name' => 'Hitendra Kawade','image' => '1755161061884432.jpg','position' => 'Head-Commercial & Supply Chain Management','description' => '<p>Hitendra Kawade is Head-Commercial &amp; Supply Chain Management function at iGenesis Technologies Ltd (Myanmar).</p>
            <p>Kawade has been associated with iGenesis Myanmar since June 2015 and contributed to the various functional areas in Organization for Unbeaten Growthful Journey in Myanmar&rsquo;s Business Operations.</p>
            <p>Kawade who is a Commerce Graduate &amp; Master in Business Administration has more than 12 years of experience in the industry having the core competencies in Project Management, Financial Planning,Operational &amp; Business Analysis, Techno-commercial &amp; Supply Chain Management.</p>
            <p>At Genesis Myanmar, he is responsible for budget control by allocation of Capex, Opex, Business Commercials and Vendor/ Partner Payments. He is also heading the Supply Chain Function &amp; Managing End to End Processes along with the team.</p>
            <p>Kawade Values the Commitment for Organization and Integrity and mention that these are two things ensured his Success and Achievements in Professional Career.</p>','order_no' => '3','status' => '1','created_at' => now(),'updated_at' => now()),
    array('name' => 'Siddhartha Bose','image' => '1755161125150819.jpg','position' => 'Head – Human Resource & Administration','description' => '<p>Siddhartha Bose began his career as an HR executive with the Xenitis group, after which he took an assignment as district manager with Ushacomm India, on the Rasthriya Swasthya Bima Yojana, a Govt. of India project. After a short stint with Global Automobiles, he further solidified his skills in the field of project management at the JayPee Nigrie Super Thermal Power Project while working with Ayoki Cembol Erectors Pvt. Ltd. In 2014 he moved to Myanmar as HR manager with Veneer and Plywood Pvt. Ltd, Sagaing. In 2017 he joined Iceberg Holding Group, a Singapore based company operating in Myanmar in the capacity of HR &amp; Payroll Manager for their HR Services outsourcing business. Later in 2020 he was promoted to HR &amp; Admin Operations Manager, where he was not only handling the HR and also the Operations of their Oil &amp; Gas business with 40 petrol pumps all over Myanmar. With over 14 years as a seasoned HR professional, Siddhartha is an accomplished administrator and experienced at government compliance and liaison work. He holds a Master&rsquo;s in Business Administration from ICFAI University(Dehradun), and is proficient in English and spoken Burmese. He has joined iGenesis Family as HR and Admin Head. Siddhartha joined with iGenesis family from November 2022</p>','order_no' => '4','status' => '1','created_at' => now(),'updated_at' => now()),
    array('name' => 'Nitesh Joshi','image' => '1755161160778902.jpg','position' => 'Project Lead- Telecom Infra','description' => '<p>Nitesh Joshi is a Project Lead for telecom infrastructure projects at iGenesis Technologies Ltd (Myanmar)</p>
            <p>Joshi has more than 10 years of experience in the field of Project Delivery, Project RF Optimization,Fiber Planning, IBS Solution, RF Planning, Technical Support, Operations, Networking in Telecom industry</p>
            <p>Prior to joining iGenesis Technologies (Myanmar) Ltd, he has worked with the companies such as Nxgenbio life sciences, MetroTel Works Pvt Ltd &amp; Titiksha TeleTechnocrats Pvt Ltd etc.</p>
            <p>Joshi with his Knowledge, Experience, Passion &amp; Innovation makes Genesis Myanmar Ltd an effective Delivery organization in Telecom Infra to serve better to our customers.</p>','order_no' => '5','status' => '1','created_at' => now(),'updated_at' => now()),
   array('name' => 'Phyo Phyo Zar Chi','image' => '1755161876091211.jpg','position' => 'Project Lead','description' => '<p>Ms. Phyo Phyo Zar Chi started her career as Layout Designer for a Publishing house in Yangon, she change her profile to HR &amp; Admin with Golden Zenith Mining and Engineering Company where she worked as HR &amp; Admin Manager. Then further to expand her experience and knowledge she joined Myanmar Mahar Dahna Company with the capacity of Management &amp; Operation Manager, where she worked for Operation and Management of the resources for the Mobile Towers in different location all around Myanmar. From February 2019, with her brilliant experience in Tower Management she joined iGeneis Myanmar as Project Lead. She is a detailed oriented operations manager/project lead with more than 9 years of experience in Team handling with effective communication, problem solving and management skills.</p>','order_no' => '6','status' => '1','created_at' => now(),'updated_at' => now())
            );
            foreach ( $our_teams as $key => $name) {
                OurTeam::create($name);
            }

    }
}
