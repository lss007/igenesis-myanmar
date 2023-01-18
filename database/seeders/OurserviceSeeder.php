<?php

namespace Database\Seeders;

use App\Models\OurService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
// added 
        /* `igenesis-myanmar`.`our_services` */
$our_services = array(
    array('title' => 'NETWORK PLANNING & DESIGN','description' => 'NPD services deliver value by designing the high Quality of network to support the current and future technology and capacity requirements of the operators. To satisfy this, iGenesis use technology expertise, sophisticated algorithms, world-class tools and disciplined design processes to provide end-to-end, multi-vendor design solutions. NPD services cover Radio Frequency (RF) and Transmission Engineering, Fixed and Core Network Engineering for GSM, CDMA, Microwave Transmission, SDH, DWDM, WiMAX and Broadband networks.','image' => '1673872355.svg','order_no' => '1','status' => '1','created_at' => now(),'updated_at' =>now()),
    array('title' => 'OPERATIONS & MAINTENANCE','description' => 'OPERATIONS & MAINTENANCE
  iGenesis Network O&M services portfolio enables operators to focus on their core areas of business while iGenesis manages Network O&M activities. This approach helps the operators in owning a high performance network at reduced operational expenses (OPEX).iGenesis has extensive experience on multi-technology products across geographies, maintenance systems and right shoring of operations. This enables iGenesis to manage operators’ critical task of Network seamlessly','image' => '1673872488.svg','order_no' => '2','status' => '1','created_at' => now(),'updated_at' => now()),
    array('title' => 'NETWORK ROLLOUT','description' => 'iGenesis benchmarking and Optimization solutions are aimed at improving the performance of an operators network, post the network roll out. With ever changing data traffic demands with the usage of and pressures on managing the operational costs, service providers are increasingly looking at Benchmarking and Optimization services for meeting the needs of customers and save on capital and operational expenditure.','image' => '1673872546.svg','order_no' => '3','status' => '1','created_at' => now(),'updated_at' => now()),
    array('title' => 'BENCHMARKING & OPTIMIZATION','description' => 'iGenesis myanmar’s benchmarking and Optimization solutions are aimed at improving the performance of an operators network, post the network roll out. With ever changing data traffic demands with the usage of smart phones and pressures on managing the operational costs, service providers are increasingly looking at Benchmarking and Optimization services for meeting the needs of customers and save on capital and operational expenditure.','image' => '1673872652.svg','order_no' => '4','status' => '1','created_at' => now(),'updated_at' => now()),
    array('title' => 'MANAGED SERVICES','description' => 'iGenesis managed services allow operators to free themselves from non-differentiating tasks of building and operating their network and focus on their customers and products. iGenesis Managed Services offerings are based on the Build-Operate-Manage (BOM) model and offer KPI/SLA based end to end services from Network Planning & Design, System Engineering, Installation and commissioning, System Integration, Optimization, Network Operations and Field Maintenance.','image' => '1673872701.svg','order_no' => '5','status' => '1','created_at' => now(),'updated_at' => now()),
    array('title' => 'ENERGY MANAGEMENT','description' => 'Energy is an indispensable resource in any Organization, as well as an increasingly critical cost factor. Better management of energy has thus become vital. Energy management in the changing business scenario needs to consider technology development, planning, optimization, monitoring and dissemination of the energy products and services to the Telecom Operators and OEMs.','image' => '1673872744.svg','order_no' => '6','status' => '1','created_at' => now(),'updated_at' => now()),
    array('title' => 'SITE ACQUISITION SERVICES','description' => 'For Telecom Operators, Time-to-market depends on effectively optimizing the acquisition process. The iGenesis Myanmar Site Acquisition Team understands the technical, engineering and business aspects of site acquisition services. Our capabilities include pre-construction leasing, entitlement activities and difficult zoning / permitting scenarios. iGenesis Myanmar has met the acquisition challenges of acquiring sites for many Telecom Operators for over 5 years, our team has provided a proven process to ensure we meet the client’s scope, cost and schedule requirements','image' => '1673872798.svg','order_no' => '7','status' => '1','created_at' => now(),'updated_at' => now()),
    array('title' => 'CONSULTING SOLUTIONS','description' => 'iGenesis provides a holistic approach that helps Operators to remain competitive in a market defined by rapidly evolving technology, a steady stream of new players and increasingly demanding consumers. iGenesis understands the Telecom market and business evolution and help Operators to identify user needs and address them through business model evolution, service-management innovation and technology strategies.','image' => '1673872863.svg','order_no' => '8','status' => '1','created_at' => now(),'updated_at' => now()),
    array('title' => 'PROFESSIONAL SERVICES','description' => 'iGenesis ability to capitalize on new thinking, new workforce models and new possibilities has made it one of the most recognized and respected workforce solutions providers in the world. iGenesis expertise, experience and unmatched global footprint allows it to deliver solutions to help its clients achieve better business results in local market.','image' => '1673872922.svg','order_no' => '9','status' => '1','created_at' => now(),'updated_at' => now())
  );
  
  foreach ( $our_services as $key => $name) {
    OurService::create($name);
}
    }
}
