<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $carsArray = [
            [
                'model' => 'A-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'A3',
                'make' => 'Audi',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'A3 Sportback e-tron',
                'make' => 'Audi',
                'years' => '2018, 2017, 2016',
            ],
            [
                'model' => 'A4',
                'make' => 'Audi',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'A4 (2005.5)',
                'make' => 'Audi',
                'years' => '2005',
            ],
            [
                'model' => 'A4 allroad',
                'make' => 'Audi',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'A5',
                'make' => 'Audi',
                'years' => '2021, 2020, 2019, 2018, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'A5 Sport',
                'make' => 'Audi',
                'years' => '2017',
            ],
            [
                'model' => 'A6',
                'make' => 'Audi',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'A6 allroad',
                'make' => 'Audi',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'A7',
                'make' => 'Audi',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'A8',
                'make' => 'Audi',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997',
            ],
            [
                'model' => 'Acadia',
                'make' => 'GMC',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Acadia Limited',
                'make' => 'GMC',
                'years' => '2017',
            ],
            [
                'model' => 'Accent',
                'make' => 'Hyundai',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Acclaim',
                'make' => 'Plymouth',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Accord',
                'make' => 'Honda',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Accord Crosstour',
                'make' => 'Honda',
                'years' => '2011, 2010',
            ],
            [
                'model' => 'Accord Hybrid',
                'make' => 'Honda',
                'years' => '2021, 2020, 2019, 2018, 2017, 2015, 2014',
            ],
            [
                'model' => 'Achieva',
                'make' => 'Oldsmobile',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Aerio',
                'make' => 'Suzuki',
                'years' => '2007, 2006, 2005, 2004, 2003, 2002',
            ],
            [
                'model' => 'Aerostar Cargo',
                'make' => 'Ford',
                'years' => '1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Aerostar Passenger',
                'make' => 'Ford',
                'years' => '1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Alero',
                'make' => 'Oldsmobile',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Allante',
                'make' => 'Cadillac',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'allroad',
                'make' => 'Audi',
                'years' => '2016, 2015, 2014, 2013, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Alpina B7',
                'make' => 'BMW',
                'years' => '2008, 2007',
            ],
            [
                'model' => 'Altima',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993',
            ],
            [
                'model' => 'Amanti',
                'make' => 'Kia',
                'years' => '2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Amigo',
                'make' => 'Isuzu',
                'years' => '2000, 1999, 1998, 1994, 1993, 1992',
            ],
            [
                'model' => 'APV Cargo',
                'make' => 'Chevrolet',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'Armada',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Arnage',
                'make' => 'Bentley',
                'years' => '2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Arteon',
                'make' => 'Volkswagen',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Ascender',
                'make' => 'Isuzu',
                'years' => '2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Ascent',
                'make' => 'Subaru',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Aspen',
                'make' => 'Chrysler',
                'years' => '2009, 2008, 2007',
            ],
            [
                'model' => 'Aspire',
                'make' => 'Ford',
                'years' => '1997, 1996, 1995, 1994',
            ],
            [
                'model' => 'Astra',
                'make' => 'Saturn',
                'years' => '2008',
            ],
            [
                'model' => 'Astro Cargo',
                'make' => 'Chevrolet',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Astro Passenger',
                'make' => 'Chevrolet',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Atlas',
                'make' => 'Volkswagen',
                'years' => '2021, 2020, 2019, 2018',
            ],
            [
                'model' => 'Atlas Cross Sport',
                'make' => 'Volkswagen',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'ATS',
                'make' => 'Cadillac',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'ATS-V',
                'make' => 'Cadillac',
                'years' => '2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'Aura',
                'make' => 'Saturn',
                'years' => '2009, 2008, 2007',
            ],
            [
                'model' => 'Aurora',
                'make' => 'Oldsmobile',
                'years' => '2003, 2002, 2001, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Avalanche',
                'make' => 'Chevrolet',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Avalanche 1500',
                'make' => 'Chevrolet',
                'years' => '2006, 2005, 2004, 2003, 2002',
            ],
            [
                'model' => 'Avalanche 2500',
                'make' => 'Chevrolet',
                'years' => '2006, 2005, 2004, 2003, 2002',
            ],
            [
                'model' => 'Avalon',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Avalon Hybrid',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Avenger',
                'make' => 'Dodge',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Aventador',
                'make' => 'Lamborghini',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'Aveo',
                'make' => 'Chevrolet',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Aviator',
                'make' => 'Lincoln',
                'years' => '2021, 2020, 2005, 2004, 2003',
            ],
            [
                'model' => 'Axiom',
                'make' => 'Isuzu',
                'years' => '2004, 2003, 2002',
            ],
            [
                'model' => 'Azera',
                'make' => 'Hyundai',
                'years' => '2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Aztek',
                'make' => 'Pontiac',
                'years' => '2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Azure',
                'make' => 'Bentley',
                'years' => '2009, 2008, 2007',
            ],
            [
                'model' => 'Azure T',
                'make' => 'Bentley',
                'years' => '2010',
            ],
            [
                'model' => 'B-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'B-Series Cab Plus',
                'make' => 'MAZDA',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'B-Series Extended Cab',
                'make' => 'MAZDA',
                'years' => '2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'B-Series Regular Cab',
                'make' => 'MAZDA',
                'years' => '2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'B9 Tribeca',
                'make' => 'Subaru',
                'years' => '2007, 2006',
            ],
            [
                'model' => 'Baja',
                'make' => 'Subaru',
                'years' => '2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Beetle',
                'make' => 'Volkswagen',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'Bentayga',
                'make' => 'Bentley',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Beretta',
                'make' => 'Chevrolet',
                'years' => '1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Blackwood',
                'make' => 'Lincoln',
                'years' => '2002',
            ],
            [
                'model' => 'Blazer',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Bolt EV',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Bonneville',
                'make' => 'Pontiac',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Borrego',
                'make' => 'Kia',
                'years' => '2009',
            ],
            [
                'model' => 'Boxster',
                'make' => 'Porsche',
                'years' => '2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997',
            ],
            [
                'model' => 'Bravada',
                'make' => 'Oldsmobile',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1994, 1993, 1992',
            ],
            [
                'model' => 'Breeze',
                'make' => 'Plymouth',
                'years' => '2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'Bronco',
                'make' => 'Ford',
                'years' => '2021, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Bronco Sport',
                'make' => 'Ford',
                'years' => '2021',
            ],
            [
                'model' => 'Brooklands',
                'make' => 'Bentley',
                'years' => '2010, 2009',
            ],
            [
                'model' => 'Brougham',
                'make' => 'Cadillac',
                'years' => '1992',
            ],
            [
                'model' => 'BRZ',
                'make' => 'Subaru',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'C-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994',
            ],
            [
                'model' => 'C-HR',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018',
            ],
            [
                'model' => 'C-MAX Energi',
                'make' => 'Ford',
                'years' => '2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'C-MAX Hybrid',
                'make' => 'Ford',
                'years' => '2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'C/V',
                'make' => 'Ram',
                'years' => '2012',
            ],
            [
                'model' => 'C/V Tradesman',
                'make' => 'Ram',
                'years' => '2015, 2014, 2013',
            ],
            [
                'model' => 'C30',
                'make' => 'Volvo',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'C70',
                'make' => 'Volvo',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2004, 2003, 2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'Cabrio',
                'make' => 'Volkswagen',
                'years' => '2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Cabrio (New)',
                'make' => 'Volkswagen',
                'years' => '1999',
            ],
            [
                'model' => 'Cabriolet',
                'make' => 'Audi',
                'years' => '1998, 1997, 1996, 1995, 1994',
            ],
            [
                'model' => 'Cabriolet',
                'make' => 'Volkswagen',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'Cadenza',
                'make' => 'Kia',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'Caliber',
                'make' => 'Dodge',
                'years' => '2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'California',
                'make' => 'Ferrari',
                'years' => '2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009',
            ],
            [
                'model' => 'Camaro',
                'make' => 'Chevrolet',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Camry',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Camry Hybrid',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Canyon Crew Cab',
                'make' => 'GMC',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Canyon Extended Cab',
                'make' => 'GMC',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Canyon Regular Cab',
                'make' => 'GMC',
                'years' => '2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Capri',
                'make' => 'Mercury',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Caprice',
                'make' => 'Chevrolet',
                'years' => '1992',
            ],
            [
                'model' => 'Caprice Classic',
                'make' => 'Chevrolet',
                'years' => '1996, 1995, 1994, 1993',
            ],
            [
                'model' => 'Captiva Sport',
                'make' => 'Chevrolet',
                'years' => '2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'Caravan Cargo',
                'make' => 'Dodge',
                'years' => '2007, 2006, 2005, 2004, 2003, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Caravan Passenger',
                'make' => 'Dodge',
                'years' => '2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Carnival',
                'make' => 'Kia',
                'years' => '2022',
            ],
            [
                'model' => 'Carrera GT',
                'make' => 'Porsche',
                'years' => '2005, 2004',
            ],
            [
                'model' => 'Cascada',
                'make' => 'Buick',
                'years' => '2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'Catera',
                'make' => 'Cadillac',
                'years' => '2001, 2000, 1999, 1998, 1997',
            ],
            [
                'model' => 'Cavalier',
                'make' => 'Chevrolet',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Cayenne',
                'make' => 'Porsche',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Cayenne Coupe',
                'make' => 'Porsche',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'Cayman',
                'make' => 'Porsche',
                'years' => '2016, 2015, 2014, 2012, 2011, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'CC',
                'make' => 'Volkswagen',
                'years' => '2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009',
            ],
            [
                'model' => 'Celica',
                'make' => 'Toyota',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Century',
                'make' => 'Buick',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Challenger',
                'make' => 'Dodge',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'Charade',
                'make' => 'Daihatsu',
                'years' => '1992',
            ],
            [
                'model' => 'Charger',
                'make' => 'Dodge',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Cherokee',
                'make' => 'Jeep',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Ciera',
                'make' => 'Oldsmobile',
                'years' => '1996',
            ],
            [
                'model' => 'Cirrus',
                'make' => 'Chrysler',
                'years' => '2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'City Express',
                'make' => 'Chevrolet',
                'years' => '2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Civic',
                'make' => 'Honda',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Civic Type R',
                'make' => 'Honda',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'CL',
                'make' => 'Acura',
                'years' => '2003, 2002, 2001, 1999, 1998, 1997',
            ],
            [
                'model' => 'CL-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'CLA',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'CLA-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2015, 2014',
            ],
            [
                'model' => 'Clarity Plug-in Hybrid',
                'make' => 'Honda',
                'years' => '2021, 2020, 2019, 2018',
            ],
            [
                'model' => 'Classic',
                'make' => 'Chevrolet',
                'years' => '2005, 2004',
            ],
            [
                'model' => 'CLK-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'CLS',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'CLS-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Club Wagon',
                'make' => 'Ford',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Clubman',
                'make' => 'MINI',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2014, 2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'Cobalt',
                'make' => 'Chevrolet',
                'years' => '2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Colorado Crew Cab',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Colorado Extended Cab',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Colorado Regular Cab',
                'make' => 'Chevrolet',
                'years' => '2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Colt',
                'make' => 'Dodge',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Colt',
                'make' => 'Plymouth',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Colt Vista',
                'make' => 'Plymouth',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Comanche Regular Cab',
                'make' => 'Jeep',
                'years' => '1992',
            ],
            [
                'model' => 'Commander',
                'make' => 'Jeep',
                'years' => '2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Compass',
                'make' => 'Jeep',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Concorde',
                'make' => 'Chrysler',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993',
            ],
            [
                'model' => 'Continental',
                'make' => 'Lincoln',
                'years' => '2020, 2019, 2018, 2017, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Continental',
                'make' => 'Bentley',
                'years' => '2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Continental GT',
                'make' => 'Bentley',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'Contour',
                'make' => 'Ford',
                'years' => '2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Convertible',
                'make' => 'MINI',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Cooper',
                'make' => 'MINI',
                'years' => '2008, 2007, 2006, 2005, 2004, 2003, 2002',
            ],
            [
                'model' => 'Corolla',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Corolla Hatchback',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Corolla Hybrid',
                'make' => 'Toyota',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'Corolla iM',
                'make' => 'Toyota',
                'years' => '2018, 2017',
            ],
            [
                'model' => 'Corrado',
                'make' => 'Volkswagen',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Corsair',
                'make' => 'Lincoln',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'Corsica',
                'make' => 'Chevrolet',
                'years' => '1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Corvette',
                'make' => 'Chevrolet',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Cougar',
                'make' => 'Mercury',
                'years' => '2002, 2001, 2000, 1999, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Countryman',
                'make' => 'MINI',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => 'Coupe',
                'make' => 'Maserati',
                'years' => '2006, 2005',
            ],
            [
                'model' => 'Coupe',
                'make' => 'MINI',
                'years' => '2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'CR-V',
                'make' => 'Honda',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997',
            ],
            [
                'model' => 'CR-V Hybrid',
                'make' => 'Honda',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'CR-Z',
                'make' => 'Honda',
                'years' => '2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => 'Cressida',
                'make' => 'Toyota',
                'years' => '1992',
            ],
            [
                'model' => 'Crossfire',
                'make' => 'Chrysler',
                'years' => '2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Crosstour',
                'make' => 'Honda',
                'years' => '2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'Crosstrek',
                'make' => 'Subaru',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'Crown Victoria',
                'make' => 'Ford',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Cruze',
                'make' => 'Chevrolet',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => 'Cruze Limited',
                'make' => 'Chevrolet',
                'years' => '2016',
            ],
            [
                'model' => 'CT',
                'make' => 'Lexus',
                'years' => '2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => 'CT4',
                'make' => 'Cadillac',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'CT5',
                'make' => 'Cadillac',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'CT6',
                'make' => 'Cadillac',
                'years' => '2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'CT6-V',
                'make' => 'Cadillac',
                'years' => '2020, 2019',
            ],
            [
                'model' => 'CTS',
                'make' => 'Cadillac',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'CTS-V',
                'make' => 'Cadillac',
                'years' => '2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'cube',
                'make' => 'Nissan',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009',
            ],
            [
                'model' => 'Cullinan',
                'make' => 'Rolls-Royce',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Custom Cruiser',
                'make' => 'Oldsmobile',
                'years' => '1992',
            ],
            [
                'model' => 'Cutlass',
                'make' => 'Oldsmobile',
                'years' => '1999, 1998, 1997',
            ],
            [
                'model' => 'Cutlass Ciera',
                'make' => 'Oldsmobile',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Cutlass Cruiser',
                'make' => 'Oldsmobile',
                'years' => '1994, 1993',
            ],
            [
                'model' => 'Cutlass Supreme',
                'make' => 'Oldsmobile',
                'years' => '1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'CX-3',
                'make' => 'MAZDA',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'CX-30',
                'make' => 'MAZDA',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'CX-5',
                'make' => 'MAZDA',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'CX-7',
                'make' => 'MAZDA',
                'years' => '2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'CX-9',
                'make' => 'MAZDA',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'D150 Club Cab',
                'make' => 'Dodge',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'D150 Regular Cab',
                'make' => 'Dodge',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'D250 Club Cab',
                'make' => 'Dodge',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'D250 Regular Cab',
                'make' => 'Dodge',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'D350 Club Cab',
                'make' => 'Dodge',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'D350 Regular Cab',
                'make' => 'Dodge',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'Dakota Club Cab',
                'make' => 'Dodge',
                'years' => '2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Dakota Crew Cab',
                'make' => 'Dodge',
                'years' => '2010, 2009, 2008',
            ],
            [
                'model' => 'Dakota Crew Cab',
                'make' => 'Ram',
                'years' => '2011',
            ],
            [
                'model' => 'Dakota Extended Cab',
                'make' => 'Dodge',
                'years' => '2010, 2009, 2008',
            ],
            [
                'model' => 'Dakota Extended Cab',
                'make' => 'Ram',
                'years' => '2011',
            ],
            [
                'model' => 'Dakota Quad Cab',
                'make' => 'Dodge',
                'years' => '2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'Dakota Regular Cab',
                'make' => 'Dodge',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Dart',
                'make' => 'Dodge',
                'years' => '2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'Dawn',
                'make' => 'Rolls-Royce',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'Daytona',
                'make' => 'Dodge',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'DB11',
                'make' => 'Aston Martin',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'DB9',
                'make' => 'Aston Martin',
                'years' => '2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'DB9 GT',
                'make' => 'Aston Martin',
                'years' => '2016',
            ],
            [
                'model' => 'DBS',
                'make' => 'Aston Martin',
                'years' => '2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'DBS Superleggera',
                'make' => 'Aston Martin',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'DBX',
                'make' => 'Aston Martin',
                'years' => '2021',
            ],
            [
                'model' => 'Defender 110',
                'make' => 'Land Rover',
                'years' => '2021, 2020, 1993',
            ],
            [
                'model' => 'Defender 90',
                'make' => 'Land Rover',
                'years' => '2021, 2020, 1997, 1995, 1994',
            ],
            [
                'model' => 'del Sol',
                'make' => 'Honda',
                'years' => '1997, 1996, 1995, 1994, 1993',
            ],
            [
                'model' => 'DeVille',
                'make' => 'Cadillac',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Diamante',
                'make' => 'Mitsubishi',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Discovery',
                'make' => 'Land Rover',
                'years' => '2021, 2020, 2019, 2018, 2017, 2004, 2003, 1999, 1998, 1997, 1996, 1995, 1994',
            ],
            [
                'model' => 'Discovery Series II',
                'make' => 'Land Rover',
                'years' => '2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Discovery Sport',
                'make' => 'Land Rover',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'DTS',
                'make' => 'Cadillac',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Durango',
                'make' => 'Dodge',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'Dynasty',
                'make' => 'Dodge',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'E-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994',
            ],
            [
                'model' => 'e-Golf',
                'make' => 'Volkswagen',
                'years' => '2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'E-PACE',
                'make' => 'Jaguar',
                'years' => '2021, 2020, 2019, 2018',
            ],
            [
                'model' => 'e-tron',
                'make' => 'Audi',
                'years' => '2021, 2019',
            ],
            [
                'model' => 'e-tron Sportback',
                'make' => 'Audi',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'E150 Cargo',
                'make' => 'Ford',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'E150 Passenger',
                'make' => 'Ford',
                'years' => '2014, 2013, 2012, 2011, 2004, 2003',
            ],
            [
                'model' => 'E150 Super Duty Cargo',
                'make' => 'Ford',
                'years' => '2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'E150 Super Duty Passenger',
                'make' => 'Ford',
                'years' => '2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'E250 Cargo',
                'make' => 'Ford',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'E250 Super Duty Cargo',
                'make' => 'Ford',
                'years' => '2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'E350 Super Duty Cargo',
                'make' => 'Ford',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'E350 Super Duty Passenger',
                'make' => 'Ford',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Echo',
                'make' => 'Toyota',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'Eclipse',
                'make' => 'Mitsubishi',
                'years' => '2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Eclipse Cross',
                'make' => 'Mitsubishi',
                'years' => '2022, 2020, 2019, 2018',
            ],
            [
                'model' => 'Econoline E150 Cargo',
                'make' => 'Ford',
                'years' => '2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Econoline E150 Passenger',
                'make' => 'Ford',
                'years' => '2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Econoline E250 Cargo',
                'make' => 'Ford',
                'years' => '2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Econoline E350 Cargo',
                'make' => 'Ford',
                'years' => '1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Econoline E350 Super Duty Cargo',
                'make' => 'Ford',
                'years' => '2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Econoline E350 Super Duty Passenger',
                'make' => 'Ford',
                'years' => '2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'EcoSport',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019, 2018',
            ],
            [
                'model' => 'Edge',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Elantra',
                'make' => 'Hyundai',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Elantra GT',
                'make' => 'Hyundai',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Eldorado',
                'make' => 'Cadillac',
                'years' => '2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Element',
                'make' => 'Honda',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Elise',
                'make' => 'Lotus',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'ELR',
                'make' => 'Cadillac',
                'years' => '2016, 2014',
            ],
            [
                'model' => 'Enclave',
                'make' => 'Buick',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'Encore',
                'make' => 'Buick',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'Encore GX',
                'make' => 'Buick',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'Endeavor',
                'make' => 'Mitsubishi',
                'years' => '2011, 2010, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Entourage',
                'make' => 'Hyundai',
                'years' => '2008, 2007',
            ],
            [
                'model' => 'Envision',
                'make' => 'Buick',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'Envoy',
                'make' => 'GMC',
                'years' => '2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2000, 1999, 1998',
            ],
            [
                'model' => 'Envoy XL',
                'make' => 'GMC',
                'years' => '2006, 2005, 2004, 2003, 2002',
            ],
            [
                'model' => 'Envoy XUV',
                'make' => 'GMC',
                'years' => '2005, 2004',
            ],
            [
                'model' => 'Eos',
                'make' => 'Volkswagen',
                'years' => '2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Equator Crew Cab',
                'make' => 'Suzuki',
                'years' => '2012, 2011, 2010, 2009',
            ],
            [
                'model' => 'Equator Extended Cab',
                'make' => 'Suzuki',
                'years' => '2012, 2011, 2010, 2009',
            ],
            [
                'model' => 'Equinox',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Equus',
                'make' => 'Hyundai',
                'years' => '2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => 'ES',
                'make' => 'Lexus',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Escalade',
                'make' => 'Cadillac',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2000, 1999',
            ],
            [
                'model' => 'Escalade ESV',
                'make' => 'Cadillac',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Escalade EXT',
                'make' => 'Cadillac',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002',
            ],
            [
                'model' => 'Escape',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Escort',
                'make' => 'Ford',
                'years' => '2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Esperante',
                'make' => 'Panoz',
                'years' => '2006, 2005',
            ],
            [
                'model' => 'Esteem',
                'make' => 'Suzuki',
                'years' => '2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Eurovan',
                'make' => 'Volkswagen',
                'years' => '2003, 2002, 2001, 2000, 1999, 1993',
            ],
            [
                'model' => 'Evora',
                'make' => 'Lotus',
                'years' => '2014, 2013, 2012, 2011, 2010',
            ],
            [
                'model' => 'Evora 400',
                'make' => 'Lotus',
                'years' => '2018, 2017',
            ],
            [
                'model' => 'Evora GT',
                'make' => 'Lotus',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'EX',
                'make' => 'INFINITI',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'Excel',
                'make' => 'Hyundai',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Excursion',
                'make' => 'Ford',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'Exige',
                'make' => 'Lotus',
                'years' => '2011, 2010, 2009, 2006',
            ],
            [
                'model' => 'Exige S',
                'make' => 'Lotus',
                'years' => '2008, 2007',
            ],
            [
                'model' => 'Expedition',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997',
            ],
            [
                'model' => 'Expedition EL',
                'make' => 'Ford',
                'years' => '2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Expedition MAX',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019, 2018',
            ],
            [
                'model' => 'Explorer',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Explorer Sport',
                'make' => 'Ford',
                'years' => '2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'Explorer Sport Trac',
                'make' => 'Ford',
                'years' => '2010, 2009, 2008, 2007, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Expo',
                'make' => 'Mitsubishi',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Express 1500 Cargo',
                'make' => 'Chevrolet',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Express 1500 Passenger',
                'make' => 'Chevrolet',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'Express 2500 Cargo',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Express 2500 Passenger',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'Express 3500 Cargo',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Express 3500 Passenger',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'F-PACE',
                'make' => 'Jaguar',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'F-TYPE',
                'make' => 'Jaguar',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'F12berlinetta',
                'make' => 'Ferrari',
                'years' => '2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'F150 (Heritage) Regular Cab',
                'make' => 'Ford',
                'years' => '2004',
            ],
            [
                'model' => 'F150 (Heritage) Super Cab',
                'make' => 'Ford',
                'years' => '2004',
            ],
            [
                'model' => 'F150 Regular Cab',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'F150 Super Cab',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'F150 SuperCrew Cab',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'F250 Crew Cab',
                'make' => 'Ford',
                'years' => '1997, 1996',
            ],
            [
                'model' => 'F250 Regular Cab',
                'make' => 'Ford',
                'years' => '1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'F250 Super Cab',
                'make' => 'Ford',
                'years' => '1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'F250 Super Duty Crew Cab',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'F250 Super Duty Regular Cab',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'F250 Super Duty Super Cab',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'F350 Crew Cab',
                'make' => 'Ford',
                'years' => '1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'F350 Regular Cab',
                'make' => 'Ford',
                'years' => '1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'F350 Super Cab',
                'make' => 'Ford',
                'years' => '1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'F350 Super Duty Crew Cab',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'F350 Super Duty Regular Cab',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'F350 Super Duty Super Cab',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'F430',
                'make' => 'Ferrari',
                'years' => '2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'F450 Super Duty Crew Cab',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'F450 Super Duty Regular Cab',
                'make' => 'Ford',
                'years' => '2020, 2019',
            ],
            [
                'model' => 'F8',
                'make' => 'Ferrari',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'Festiva',
                'make' => 'Ford',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'FF',
                'make' => 'Ferrari',
                'years' => '2016, 2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'Fiesta',
                'make' => 'Ford',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => 'Fifth Ave',
                'make' => 'Chrysler',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'Firebird',
                'make' => 'Pontiac',
                'years' => '2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Fit',
                'make' => 'Honda',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Five Hundred',
                'make' => 'Ford',
                'years' => '2007, 2006, 2005',
            ],
            [
                'model' => 'FJ Cruiser',
                'make' => 'Toyota',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Fleetwood',
                'make' => 'Cadillac',
                'years' => '1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Flex',
                'make' => 'Ford',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009',
            ],
            [
                'model' => 'Flying Spur',
                'make' => 'Bentley',
                'years' => '2021, 2020, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'Focus',
                'make' => 'Ford',
                'years' => '2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'Focus ST',
                'make' => 'Ford',
                'years' => '2015, 2014, 2013',
            ],
            [
                'model' => 'Forenza',
                'make' => 'Suzuki',
                'years' => '2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Forester',
                'make' => 'Subaru',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'Forte',
                'make' => 'Kia',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010',
            ],
            [
                'model' => 'Forte Koup',
                'make' => 'Kia',
                'years' => '2016, 2015',
            ],
            [
                'model' => 'Forte5',
                'make' => 'Kia',
                'years' => '2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'fortwo',
                'make' => 'smart',
                'years' => '2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'fortwo cabrio',
                'make' => 'smart',
                'years' => '2017',
            ],
            [
                'model' => 'fortwo electric drive',
                'make' => 'smart',
                'years' => '2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'fortwo electric drive cabrio',
                'make' => 'smart',
                'years' => '2018, 2017',
            ],
            [
                'model' => 'fortwo EQ cabrio',
                'make' => 'smart',
                'years' => '2019',
            ],
            [
                'model' => 'fortwo EQ coupe',
                'make' => 'smart',
                'years' => '2019',
            ],
            [
                'model' => 'Fox',
                'make' => 'Volkswagen',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'FR-S',
                'make' => 'Scion',
                'years' => '2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'Freelander',
                'make' => 'Land Rover',
                'years' => '2005, 2004, 2003, 2002',
            ],
            [
                'model' => 'Freestar Cargo',
                'make' => 'Ford',
                'years' => '2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Freestar Passenger',
                'make' => 'Ford',
                'years' => '2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Freestyle',
                'make' => 'Ford',
                'years' => '2007, 2006, 2005',
            ],
            [
                'model' => 'Frontier Crew Cab',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'Frontier King Cab',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'Frontier Regular Cab',
                'make' => 'Nissan',
                'years' => '2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'Fusion',
                'make' => 'Ford',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Fusion Energi',
                'make' => 'Ford',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'Fusion Plug-in Hybrid',
                'make' => 'Ford',
                'years' => '2020',
            ],
            [
                'model' => 'FX',
                'make' => 'INFINITI',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'G',
                'make' => 'INFINITI',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'G-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002',
            ],
            [
                'model' => 'G-Series 1500',
                'make' => 'Chevrolet',
                'years' => '1998, 1997, 1996',
            ],
            [
                'model' => 'G-Series 2500',
                'make' => 'Chevrolet',
                'years' => '1998, 1997, 1996',
            ],
            [
                'model' => 'G-Series 3500',
                'make' => 'Chevrolet',
                'years' => '1998, 1997',
            ],
            [
                'model' => 'G-Series G10',
                'make' => 'Chevrolet',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'G-Series G20',
                'make' => 'Chevrolet',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'G-Series G30',
                'make' => 'Chevrolet',
                'years' => '1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'G3',
                'make' => 'Pontiac',
                'years' => '2010, 2009',
            ],
            [
                'model' => 'G5',
                'make' => 'Pontiac',
                'years' => '2009, 2008, 2007',
            ],
            [
                'model' => 'G6',
                'make' => 'Pontiac',
                'years' => '2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'G6 (2009.5)',
                'make' => 'Pontiac',
                'years' => '2009',
            ],
            [
                'model' => 'G70',
                'make' => 'Genesis',
                'years' => '2022, 2021, 2020, 2019',
            ],
            [
                'model' => 'G8',
                'make' => 'Pontiac',
                'years' => '2009, 2008',
            ],
            [
                'model' => 'G80',
                'make' => 'Genesis',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'G90',
                'make' => 'Genesis',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Galant',
                'make' => 'Mitsubishi',
                'years' => '2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Gallardo',
                'make' => 'Lamborghini',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Genesis',
                'make' => 'Hyundai',
                'years' => '2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009',
            ],
            [
                'model' => 'Genesis Coupe',
                'make' => 'Hyundai',
                'years' => '2016, 2015, 2014, 2013, 2012, 2011, 2010',
            ],
            [
                'model' => 'Ghibli',
                'make' => 'Maserati',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'Ghost',
                'make' => 'Rolls-Royce',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010',
            ],
            [
                'model' => 'Giulia',
                'make' => 'Alfa Romeo',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'GL-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'GLA',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'GLA-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2015',
            ],
            [
                'model' => 'Gladiator',
                'make' => 'Jeep',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'GLB',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'GLC',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'GLC Coupe',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'GLE',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'GLE Coupe',
                'make' => 'Mercedes-Benz',
                'years' => '2016',
            ],
            [
                'model' => 'GLI',
                'make' => 'Volkswagen',
                'years' => '2009, 2008',
            ],
            [
                'model' => 'GLK-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2015, 2014, 2013, 2012, 2011, 2010',
            ],
            [
                'model' => 'GLS',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Golf',
                'make' => 'Volkswagen',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1992',
            ],
            [
                'model' => 'Golf (New)',
                'make' => 'Volkswagen',
                'years' => '1999',
            ],
            [
                'model' => 'Golf Alltrack',
                'make' => 'Volkswagen',
                'years' => '2019, 2018, 2017',
            ],
            [
                'model' => 'Golf GTI',
                'make' => 'Volkswagen',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Golf III',
                'make' => 'Volkswagen',
                'years' => '1995, 1994, 1993',
            ],
            [
                'model' => 'Golf R',
                'make' => 'Volkswagen',
                'years' => '2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Golf SportWagen',
                'make' => 'Volkswagen',
                'years' => '2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'GR Supra',
                'make' => 'Toyota',
                'years' => '2022, 2021, 2020',
            ],
            [
                'model' => 'Grand Am',
                'make' => 'Pontiac',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Grand Caravan Cargo',
                'make' => 'Dodge',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Grand Caravan Passenger',
                'make' => 'Dodge',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Grand Cherokee',
                'make' => 'Jeep',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993',
            ],
            [
                'model' => 'Grand Cherokee L',
                'make' => 'Jeep',
                'years' => '2021',
            ],
            [
                'model' => 'Grand Marquis',
                'make' => 'Mercury',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Grand Prix',
                'make' => 'Pontiac',
                'years' => '2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Grand Vitara',
                'make' => 'Suzuki',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Grand Voyager',
                'make' => 'Chrysler',
                'years' => '2000',
            ],
            [
                'model' => 'Grand Voyager',
                'make' => 'Plymouth',
                'years' => '2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'GranSport',
                'make' => 'Maserati',
                'years' => '2006, 2005',
            ],
            [
                'model' => 'GranTurismo',
                'make' => 'Maserati',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'GS',
                'make' => 'Lexus',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993',
            ],
            [
                'model' => 'GT',
                'make' => 'Ford',
                'years' => '2006, 2005',
            ],
            [
                'model' => 'GT',
                'make' => 'McLaren',
                'years' => '2020',
            ],
            [
                'model' => 'GT-R',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009',
            ],
            [
                'model' => 'GTC4Lusso',
                'make' => 'Ferrari',
                'years' => '2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'GTI',
                'make' => 'Volkswagen',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1995, 1992',
            ],
            [
                'model' => 'GTI (New)',
                'make' => 'Volkswagen',
                'years' => '1999',
            ],
            [
                'model' => 'GTO',
                'make' => 'Pontiac',
                'years' => '2006, 2005, 2004',
            ],
            [
                'model' => 'GV70',
                'make' => 'Genesis',
                'years' => '2022',
            ],
            [
                'model' => 'GV80',
                'make' => 'Genesis',
                'years' => '2021',
            ],
            [
                'model' => 'GX',
                'make' => 'Lexus',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'H1',
                'make' => 'HUMMER',
                'years' => '2006, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993',
            ],
            [
                'model' => 'H2',
                'make' => 'HUMMER',
                'years' => '2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'H3',
                'make' => 'HUMMER',
                'years' => '2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'H3T',
                'make' => 'HUMMER',
                'years' => '2010, 2009',
            ],
            [
                'model' => 'Hardtop',
                'make' => 'MINI',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009',
            ],
            [
                'model' => 'Hardtop 2 Door',
                'make' => 'MINI',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Hardtop 4 Door',
                'make' => 'MINI',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'HHR',
                'make' => 'Chevrolet',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Highlander',
                'make' => 'Toyota',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Highlander Hybrid',
                'make' => 'Toyota',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Hombre Regular Cab',
                'make' => 'Isuzu',
                'years' => '2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'Hombre Spacecab',
                'make' => 'Isuzu',
                'years' => '2000, 1999, 1998, 1997',
            ],
            [
                'model' => 'HR-V',
                'make' => 'Honda',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'HS',
                'make' => 'Lexus',
                'years' => '2012, 2011, 2010',
            ],
            [
                'model' => 'Huracan',
                'make' => 'Lamborghini',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'I',
                'make' => 'INFINITI',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'i-280 Extended Cab',
                'make' => 'Isuzu',
                'years' => '2006',
            ],
            [
                'model' => 'i-290 Extended Cab',
                'make' => 'Isuzu',
                'years' => '2008, 2007',
            ],
            [
                'model' => 'i-350 Crew Cab',
                'make' => 'Isuzu',
                'years' => '2006',
            ],
            [
                'model' => 'i-370 Crew Cab',
                'make' => 'Isuzu',
                'years' => '2008, 2007',
            ],
            [
                'model' => 'i-370 Extended Cab',
                'make' => 'Isuzu',
                'years' => '2008, 2007',
            ],
            [
                'model' => 'i-MiEV',
                'make' => 'Mitsubishi',
                'years' => '2017, 2016, 2014, 2012',
            ],
            [
                'model' => 'I-PACE',
                'make' => 'Jaguar',
                'years' => '2020, 2019',
            ],
            [
                'model' => 'i3',
                'make' => 'BMW',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'i8',
                'make' => 'BMW',
                'years' => '2020, 2019, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'iA',
                'make' => 'Scion',
                'years' => '2016',
            ],
            [
                'model' => 'ID.4',
                'make' => 'Volkswagen',
                'years' => '2021',
            ],
            [
                'model' => 'ILX',
                'make' => 'Acura',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'iM',
                'make' => 'Scion',
                'years' => '2016',
            ],
            [
                'model' => 'Impala',
                'make' => 'Chevrolet',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1996, 1995, 1994',
            ],
            [
                'model' => 'Impala Limited',
                'make' => 'Chevrolet',
                'years' => '2016, 2015, 2014',
            ],
            [
                'model' => 'Imperial',
                'make' => 'Chrysler',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'Impreza',
                'make' => 'Subaru',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993',
            ],
            [
                'model' => 'Impulse',
                'make' => 'Isuzu',
                'years' => '1992',
            ],
            [
                'model' => 'Insight',
                'make' => 'Honda',
                'years' => '2021, 2020, 2019, 2014, 2013, 2012, 2011, 2010, 2006, 2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'Integra',
                'make' => 'Acura',
                'years' => '2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Intrepid',
                'make' => 'Dodge',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993',
            ],
            [
                'model' => 'Intrigue',
                'make' => 'Oldsmobile',
                'years' => '2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'Ion',
                'make' => 'Saturn',
                'years' => '2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Ioniq Electric',
                'make' => 'Hyundai',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Ioniq Hybrid',
                'make' => 'Hyundai',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Ioniq Plug-in Hybrid',
                'make' => 'Hyundai',
                'years' => '2021, 2020, 2019, 2018',
            ],
            [
                'model' => 'iQ',
                'make' => 'Scion',
                'years' => '2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'IS',
                'make' => 'Lexus',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'IS F',
                'make' => 'Lexus',
                'years' => '2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'J',
                'make' => 'INFINITI',
                'years' => '1997, 1996, 1995, 1994, 1993',
            ],
            [
                'model' => 'Jetta',
                'make' => 'Volkswagen',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1992',
            ],
            [
                'model' => 'Jetta (New)',
                'make' => 'Volkswagen',
                'years' => '2005, 1999',
            ],
            [
                'model' => 'Jetta GLI',
                'make' => 'Volkswagen',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Jetta III',
                'make' => 'Volkswagen',
                'years' => '1995, 1994, 1993',
            ],
            [
                'model' => 'Jetta SportWagen',
                'make' => 'Volkswagen',
                'years' => '2014, 2013, 2012',
            ],
            [
                'model' => 'Jimmy',
                'make' => 'GMC',
                'years' => '2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Journey',
                'make' => 'Dodge',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009',
            ],
            [
                'model' => 'JUKE',
                'make' => 'Nissan',
                'years' => '2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => 'Justy',
                'make' => 'Subaru',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'JX',
                'make' => 'INFINITI',
                'years' => '2013',
            ],
            [
                'model' => 'K5',
                'make' => 'Kia',
                'years' => '2022, 2021',
            ],
            [
                'model' => 'K900',
                'make' => 'Kia',
                'years' => '2020, 2019, 2017, 2016, 2015',
            ],
            [
                'model' => 'Karma',
                'make' => 'Fisker',
                'years' => '2012',
            ],
            [
                'model' => 'Kicks',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018',
            ],
            [
                'model' => 'King Cab',
                'make' => 'Nissan',
                'years' => '1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Kizashi',
                'make' => 'Suzuki',
                'years' => '2013, 2012, 2011, 2010',
            ],
            [
                'model' => 'Kona',
                'make' => 'Hyundai',
                'years' => '2021, 2020, 2019, 2018',
            ],
            [
                'model' => 'Kona Electric',
                'make' => 'Hyundai',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'L-Series',
                'make' => 'Saturn',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'LaCrosse',
                'make' => 'Buick',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Lancer',
                'make' => 'Mitsubishi',
                'years' => '2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002',
            ],
            [
                'model' => 'Lancer Evolution',
                'make' => 'Mitsubishi',
                'years' => '2015',
            ],
            [
                'model' => 'Land Cruiser',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Lanos',
                'make' => 'Daewoo',
                'years' => '2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Laser',
                'make' => 'Plymouth',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'LC',
                'make' => 'Lexus',
                'years' => '2021, 2020, 2019, 2018',
            ],
            [
                'model' => 'LEAF',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => 'LeBaron',
                'make' => 'Chrysler',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Legacy',
                'make' => 'Subaru',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Leganza',
                'make' => 'Daewoo',
                'years' => '2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Legend',
                'make' => 'Acura',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'LeMans',
                'make' => 'Pontiac',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'LeSabre',
                'make' => 'Buick',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Levante',
                'make' => 'Maserati',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'LFA',
                'make' => 'Lexus',
                'years' => '2012',
            ],
            [
                'model' => 'LHS',
                'make' => 'Chrysler',
                'years' => '2001, 2000, 1999, 1997, 1996, 1995, 1994',
            ],
            [
                'model' => 'Liberty',
                'make' => 'Jeep',
                'years' => '2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002',
            ],
            [
                'model' => 'Loyale',
                'make' => 'Subaru',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'LR2',
                'make' => 'Land Rover',
                'years' => '2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'LR3',
                'make' => 'Land Rover',
                'years' => '2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'LR4',
                'make' => 'Land Rover',
                'years' => '2016, 2015, 2014, 2013, 2012, 2011, 2010',
            ],
            [
                'model' => 'LS',
                'make' => 'Lexus',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'LS',
                'make' => 'Lincoln',
                'years' => '2006, 2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'LSS',
                'make' => 'Oldsmobile',
                'years' => '1999, 1998, 1997',
            ],
            [
                'model' => 'Lucerne',
                'make' => 'Buick',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Lumina',
                'make' => 'Chevrolet',
                'years' => '2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Lumina APV',
                'make' => 'Chevrolet',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'Lumina Cargo',
                'make' => 'Chevrolet',
                'years' => '1996, 1995, 1994',
            ],
            [
                'model' => 'Lumina Passenger',
                'make' => 'Chevrolet',
                'years' => '1996, 1995, 1994',
            ],
            [
                'model' => 'LX',
                'make' => 'Lexus',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'M',
                'make' => 'INFINITI',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2004, 2003, 1992',
            ],
            [
                'model' => 'M',
                'make' => 'BMW',
                'years' => '2002, 2001, 2000',
            ],
            [
                'model' => 'M-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'M2',
                'make' => 'BMW',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'M3',
                'make' => 'BMW',
                'years' => '2021, 2018, 2017, 2016, 2015, 2013, 2012, 2011, 2010, 2009, 2008, 2006, 2005, 2004, 2003, 2002, 2001, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'M4',
                'make' => 'BMW',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'M5',
                'make' => 'BMW',
                'years' => '2021, 2020, 2019, 2018, 2016, 2015, 2014, 2013, 2010, 2009, 2008, 2007, 2006, 2003, 2002, 2001, 2000, 1993, 1992',
            ],
            [
                'model' => 'M6',
                'make' => 'BMW',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'M8',
                'make' => 'BMW',
                'years' => '2022, 2021, 2020',
            ],
            [
                'model' => 'Macan',
                'make' => 'Porsche',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Magnum',
                'make' => 'Dodge',
                'years' => '2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Malibu',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997',
            ],
            [
                'model' => 'Malibu (Classic)',
                'make' => 'Chevrolet',
                'years' => '2008',
            ],
            [
                'model' => 'Malibu Limited',
                'make' => 'Chevrolet',
                'years' => '2016',
            ],
            [
                'model' => 'Marauder',
                'make' => 'Mercury',
                'years' => '2004, 2003',
            ],
            [
                'model' => 'Mariner',
                'make' => 'Mercury',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Mark LT',
                'make' => 'Lincoln',
                'years' => '2008, 2007, 2006',
            ],
            [
                'model' => 'Mark VII',
                'make' => 'Lincoln',
                'years' => '1992',
            ],
            [
                'model' => 'Mark VIII',
                'make' => 'Lincoln',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993',
            ],
            [
                'model' => 'Matrix',
                'make' => 'Toyota',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Maxima',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'MAZDA2',
                'make' => 'MAZDA',
                'years' => '2014, 2013, 2012, 2011',
            ],
            [
                'model' => 'MAZDA3',
                'make' => 'MAZDA',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'MAZDA5',
                'make' => 'MAZDA',
                'years' => '2015, 2014, 2013, 2012, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'MAZDA6',
                'make' => 'MAZDA',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'MDX',
                'make' => 'Acura',
                'years' => '2022, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'MDX Sport Hybrid',
                'make' => 'Acura',
                'years' => '2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Mercedes-AMG A-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'Mercedes-AMG C-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Mercedes-AMG CLA',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'Mercedes-AMG CLS',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Mercedes-AMG E-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Mercedes-AMG G-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Mercedes-AMG GLA',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'Mercedes-AMG GLB',
                'make' => 'Mercedes-Benz',
                'years' => '2021',
            ],
            [
                'model' => 'Mercedes-AMG GLC',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Mercedes-AMG GLC Coupe',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Mercedes-AMG GLE',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'Mercedes-AMG GLE Coupe',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'Mercedes-AMG GLS',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2019, 2018, 2017',
            ],
            [
                'model' => 'Mercedes-AMG GT',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'Mercedes-AMG S-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Mercedes-AMG SL',
                'make' => 'Mercedes-Benz',
                'years' => '2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'Mercedes-AMG SLC',
                'make' => 'Mercedes-Benz',
                'years' => '2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Mercedes-AMG SLK',
                'make' => 'Mercedes-Benz',
                'years' => '2016',
            ],
            [
                'model' => 'Mercedes-Maybach GLS',
                'make' => 'Mercedes-Benz',
                'years' => '2021',
            ],
            [
                'model' => 'Mercedes-Maybach S 600',
                'make' => 'Mercedes-Benz',
                'years' => '2016',
            ],
            [
                'model' => 'Mercedes-Maybach S-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Metris Cargo',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'Metris Passenger',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'Metris WORKER Cargo',
                'make' => 'Mercedes-Benz',
                'years' => '2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Metris WORKER Passenger',
                'make' => 'Mercedes-Benz',
                'years' => '2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Metro',
                'make' => 'Chevrolet',
                'years' => '2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'Metro',
                'make' => 'Geo',
                'years' => '1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Mighty Max Macro Cab',
                'make' => 'Mitsubishi',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Mighty Max Regular Cab',
                'make' => 'Mitsubishi',
                'years' => '1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Milan',
                'make' => 'Mercury',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Millenia',
                'make' => 'MAZDA',
                'years' => '2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Mirage',
                'make' => 'Mitsubishi',
                'years' => '2021, 2020, 2019, 2018, 2017, 2015, 2014, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Mirage G4',
                'make' => 'Mitsubishi',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Mirai',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'MKC',
                'make' => 'Lincoln',
                'years' => '2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'MKS',
                'make' => 'Lincoln',
                'years' => '2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009',
            ],
            [
                'model' => 'MKT',
                'make' => 'Lincoln',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010',
            ],
            [
                'model' => 'MKX',
                'make' => 'Lincoln',
                'years' => '2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'MKZ',
                'make' => 'Lincoln',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'model 3',
                'make' => 'Tesla',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'model S',
                'make' => 'Tesla',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'model X',
                'make' => 'Tesla',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'model Y',
                'make' => 'Tesla',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'Monaco',
                'make' => 'Dodge',
                'years' => '1992',
            ],
            [
                'model' => 'Montana',
                'make' => 'Pontiac',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Montana SV6',
                'make' => 'Pontiac',
                'years' => '2006, 2005',
            ],
            [
                'model' => 'Monte Carlo',
                'make' => 'Chevrolet',
                'years' => '2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Montego',
                'make' => 'Mercury',
                'years' => '2007, 2006, 2005',
            ],
            [
                'model' => 'Monterey',
                'make' => 'Mercury',
                'years' => '2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Montero',
                'make' => 'Mitsubishi',
                'years' => '2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Montero Sport',
                'make' => 'Mitsubishi',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997',
            ],
            [
                'model' => 'Mountaineer',
                'make' => 'Mercury',
                'years' => '2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997',
            ],
            [
                'model' => 'MP4-12C',
                'make' => 'McLaren',
                'years' => '2014, 2013, 2012',
            ],
            [
                'model' => 'MPV',
                'make' => 'MAZDA',
                'years' => '2006, 2005, 2004, 2003, 2002, 2001, 2000, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'MR2',
                'make' => 'Toyota',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Mulsanne',
                'make' => 'Bentley',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => 'Murano',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Murcielago',
                'make' => 'Lamborghini',
                'years' => '2010, 2009, 2007, 2006',
            ],
            [
                'model' => 'Murcielago LP640',
                'make' => 'Lamborghini',
                'years' => '2008',
            ],
            [
                'model' => 'Mustang',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Mustang MACH-E',
                'make' => 'Ford',
                'years' => '2021',
            ],
            [
                'model' => 'MX-3',
                'make' => 'MAZDA',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'MX-5 Miata',
                'make' => 'MAZDA',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'MX-5 Miata RF',
                'make' => 'MAZDA',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'MX-6',
                'make' => 'MAZDA',
                'years' => '1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Mystique',
                'make' => 'Mercury',
                'years' => '2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Nautilus',
                'make' => 'Lincoln',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Navajo',
                'make' => 'MAZDA',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Navigator',
                'make' => 'Lincoln',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'Navigator L',
                'make' => 'Lincoln',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Neon',
                'make' => 'Dodge',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Neon',
                'make' => 'Plymouth',
                'years' => '2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'New Beetle',
                'make' => 'Volkswagen',
                'years' => '2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'New Yorker',
                'make' => 'Chrysler',
                'years' => '1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Niro',
                'make' => 'Kia',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Niro EV',
                'make' => 'Kia',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Niro Plug-in Hybrid',
                'make' => 'Kia',
                'years' => '2021, 2020, 2019, 2018',
            ],
            [
                'model' => 'Nitro',
                'make' => 'Dodge',
                'years' => '2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'NSX',
                'make' => 'Acura',
                'years' => '2021, 2020, 2019, 2018, 2017, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Nubira',
                'make' => 'Daewoo',
                'years' => '2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'NV1500 Cargo',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'NV200',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'NV200 Taxi',
                'make' => 'Nissan',
                'years' => '2019, 2016, 2015, 2014',
            ],
            [
                'model' => 'NV2500 HD Cargo',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'NV3500 HD Cargo',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'NV3500 HD Passenger',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'NX',
                'make' => 'Nissan',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'NX',
                'make' => 'Lexus',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Oasis',
                'make' => 'Isuzu',
                'years' => '1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'Odyssey',
                'make' => 'Honda',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Optima',
                'make' => 'Kia',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Optima (2006.5)',
                'make' => 'Kia',
                'years' => '2006',
            ],
            [
                'model' => 'Optima Hybrid',
                'make' => 'Kia',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Optima Plug-in Hybrid',
                'make' => 'Kia',
                'years' => '2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Outback',
                'make' => 'Subaru',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'Outlander',
                'make' => 'Mitsubishi',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Outlander PHEV',
                'make' => 'Mitsubishi',
                'years' => '2021, 2020, 2019, 2018',
            ],
            [
                'model' => 'Outlander Sport',
                'make' => 'Mitsubishi',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => 'Outlook',
                'make' => 'Saturn',
                'years' => '2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'P1',
                'make' => 'McLaren',
                'years' => '2015, 2014',
            ],
            [
                'model' => 'Paceman',
                'make' => 'MINI',
                'years' => '2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'Pacifica',
                'make' => 'Chrysler',
                'years' => '2021, 2020, 2019, 2018, 2017, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Pacifica Hybrid',
                'make' => 'Chrysler',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Palisade',
                'make' => 'Hyundai',
                'years' => '2022, 2021, 2020',
            ],
            [
                'model' => 'Panamera',
                'make' => 'Porsche',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010',
            ],
            [
                'model' => 'Park Avenue',
                'make' => 'Buick',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Paseo',
                'make' => 'Toyota',
                'years' => '1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Passat',
                'make' => 'Volkswagen',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Passat (New)',
                'make' => 'Volkswagen',
                'years' => '2001',
            ],
            [
                'model' => 'Passport',
                'make' => 'Honda',
                'years' => '2021, 2020, 2019, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994',
            ],
            [
                'model' => 'Pathfinder',
                'make' => 'Nissan',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Pathfinder Armada',
                'make' => 'Nissan',
                'years' => '2004',
            ],
            [
                'model' => 'Patriot',
                'make' => 'Jeep',
                'years' => '2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Phaeton',
                'make' => 'Volkswagen',
                'years' => '2006, 2005, 2004',
            ],
            [
                'model' => 'Phantom',
                'make' => 'Rolls-Royce',
                'years' => '2021, 2020, 2019, 2018, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Pilot',
                'make' => 'Honda',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Portofino',
                'make' => 'Ferrari',
                'years' => '2021, 2020, 2019, 2018',
            ],
            [
                'model' => 'Precis',
                'make' => 'Mitsubishi',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Prelude',
                'make' => 'Honda',
                'years' => '2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Premier',
                'make' => 'Eagle',
                'years' => '1992',
            ],
            [
                'model' => 'Previa',
                'make' => 'Toyota',
                'years' => '1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Prius',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Prius c',
                'make' => 'Toyota',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'Prius Plug-in Hybrid',
                'make' => 'Toyota',
                'years' => '2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'Prius Prime',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Prius v',
                'make' => 'Toyota',
                'years' => '2017, 2016, 2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'Prizm',
                'make' => 'Chevrolet',
                'years' => '2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'Prizm',
                'make' => 'Geo',
                'years' => '1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Probe',
                'make' => 'Ford',
                'years' => '1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'ProMaster 1500 Cargo',
                'make' => 'Ram',
                'years' => '2014',
            ],
            [
                'model' => 'ProMaster 2500 Cargo',
                'make' => 'Ram',
                'years' => '2014',
            ],
            [
                'model' => 'ProMaster 3500 Cargo',
                'make' => 'Ram',
                'years' => '2014',
            ],
            [
                'model' => 'ProMaster Cargo Van',
                'make' => 'Ram',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'ProMaster City',
                'make' => 'Ram',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'ProMaster Window Van',
                'make' => 'Ram',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Protege',
                'make' => 'MAZDA',
                'years' => '2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Protege5',
                'make' => 'MAZDA',
                'years' => '2003, 2002',
            ],
            [
                'model' => 'Prowler',
                'make' => 'Chrysler',
                'years' => '2002, 2001',
            ],
            [
                'model' => 'Prowler',
                'make' => 'Plymouth',
                'years' => '2000, 1999, 1997',
            ],
            [
                'model' => 'PT Cruiser',
                'make' => 'Chrysler',
                'years' => '2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Q',
                'make' => 'INFINITI',
                'years' => '2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Q3',
                'make' => 'Audi',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Q40',
                'make' => 'INFINITI',
                'years' => '2015',
            ],
            [
                'model' => 'Q5',
                'make' => 'Audi',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009',
            ],
            [
                'model' => 'Q5 Sportback',
                'make' => 'Audi',
                'years' => '2021',
            ],
            [
                'model' => 'Q50',
                'make' => 'INFINITI',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'Q60',
                'make' => 'INFINITI',
                'years' => '2021, 2020, 2019, 2018, 2017, 2015, 2014',
            ],
            [
                'model' => 'Q7',
                'make' => 'Audi',
                'years' => '2021, 2020, 2019, 2018, 2017, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Q70',
                'make' => 'INFINITI',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'Q8',
                'make' => 'Audi',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Quattro',
                'make' => 'Audi',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Quattroporte',
                'make' => 'Maserati',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Quest',
                'make' => 'Nissan',
                'years' => '2017, 2016, 2015, 2014, 2013, 2012, 2011, 2009, 2008, 2007, 2006, 2005, 2004, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993',
            ],
            [
                'model' => 'QX',
                'make' => 'INFINITI',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997',
            ],
            [
                'model' => 'QX30',
                'make' => 'INFINITI',
                'years' => '2019, 2018, 2017',
            ],
            [
                'model' => 'QX50',
                'make' => 'INFINITI',
                'years' => '2021, 2020, 2019, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'QX60',
                'make' => 'INFINITI',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'QX70',
                'make' => 'INFINITI',
                'years' => '2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'QX80',
                'make' => 'INFINITI',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'R-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2012, 2011, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'R32',
                'make' => 'Volkswagen',
                'years' => '2008, 2004',
            ],
            [
                'model' => 'R8',
                'make' => 'Audi',
                'years' => '2021, 2020, 2018, 2017, 2015, 2014, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'Rabbit',
                'make' => 'Volkswagen',
                'years' => '2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Raider Double Cab',
                'make' => 'Mitsubishi',
                'years' => '2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Raider Extended Cab',
                'make' => 'Mitsubishi',
                'years' => '2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Rainier',
                'make' => 'Buick',
                'years' => '2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Rally Wagon 1500',
                'make' => 'GMC',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'Rally Wagon 2500',
                'make' => 'GMC',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Rally Wagon 3500',
                'make' => 'GMC',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Rally Wagon G2500',
                'make' => 'GMC',
                'years' => '1995',
            ],
            [
                'model' => 'Rally Wagon G3500',
                'make' => 'GMC',
                'years' => '1996, 1995',
            ],
            [
                'model' => 'Ram 1500 Club Cab',
                'make' => 'Dodge',
                'years' => '2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Ram 1500 Crew Cab',
                'make' => 'Dodge',
                'years' => '2010, 2009',
            ],
            [
                'model' => 'Ram 1500 Mega Cab',
                'make' => 'Dodge',
                'years' => '2008, 2007, 2006',
            ],
            [
                'model' => 'Ram 1500 Quad Cab',
                'make' => 'Dodge',
                'years' => '2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'Ram 1500 Regular Cab',
                'make' => 'Dodge',
                'years' => '2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994',
            ],
            [
                'model' => 'Ram 2500 Club Cab',
                'make' => 'Dodge',
                'years' => '1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Ram 2500 Crew Cab',
                'make' => 'Dodge',
                'years' => '2010',
            ],
            [
                'model' => 'Ram 2500 Mega Cab',
                'make' => 'Dodge',
                'years' => '2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Ram 2500 Quad Cab',
                'make' => 'Dodge',
                'years' => '2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'Ram 2500 Regular Cab',
                'make' => 'Dodge',
                'years' => '2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994',
            ],
            [
                'model' => 'Ram 3500 Club Cab',
                'make' => 'Dodge',
                'years' => '1997, 1996, 1995',
            ],
            [
                'model' => 'Ram 3500 Crew Cab',
                'make' => 'Dodge',
                'years' => '2010',
            ],
            [
                'model' => 'Ram 3500 Mega Cab',
                'make' => 'Dodge',
                'years' => '2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Ram 3500 Quad Cab',
                'make' => 'Dodge',
                'years' => '2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'Ram 3500 Regular Cab',
                'make' => 'Dodge',
                'years' => '2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994',
            ],
            [
                'model' => 'Ram 50 Regular Cab',
                'make' => 'Dodge',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'Ram Van 1500',
                'make' => 'Dodge',
                'years' => '2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Ram Van 2500',
                'make' => 'Dodge',
                'years' => '2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Ram Van 3500',
                'make' => 'Dodge',
                'years' => '2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Ram Van B150',
                'make' => 'Dodge',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Ram Van B250',
                'make' => 'Dodge',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Ram Van B350',
                'make' => 'Dodge',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Ram Wagon 1500',
                'make' => 'Dodge',
                'years' => '2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Ram Wagon 2500',
                'make' => 'Dodge',
                'years' => '2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Ram Wagon 3500',
                'make' => 'Dodge',
                'years' => '2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Ram Wagon B150',
                'make' => 'Dodge',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Ram Wagon B250',
                'make' => 'Dodge',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Ram Wagon B350',
                'make' => 'Dodge',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Ramcharger',
                'make' => 'Dodge',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'Range Rover',
                'make' => 'Land Rover',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Range Rover Evoque',
                'make' => 'Land Rover',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'Range Rover Sport',
                'make' => 'Land Rover',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Range Rover Velar',
                'make' => 'Land Rover',
                'years' => '2021, 2020, 2019, 2018',
            ],
            [
                'model' => 'Ranger Regular Cab',
                'make' => 'Ford',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Ranger Super Cab',
                'make' => 'Ford',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Ranger SuperCab',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Ranger SuperCrew',
                'make' => 'Ford',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Rapide',
                'make' => 'Aston Martin',
                'years' => '2012, 2011, 2010',
            ],
            [
                'model' => 'Rapide S',
                'make' => 'Aston Martin',
                'years' => '2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'RAV4',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'RAV4 Hybrid',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'RAV4 Prime',
                'make' => 'Toyota',
                'years' => '2021',
            ],
            [
                'model' => 'RC',
                'make' => 'Lexus',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'RDX',
                'make' => 'Acura',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Regal',
                'make' => 'Buick',
                'years' => '2017, 2016, 2015, 2014, 2013, 2012, 2011, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Regal Sportback',
                'make' => 'Buick',
                'years' => '2020, 2019, 2018',
            ],
            [
                'model' => 'Regal TourX',
                'make' => 'Buick',
                'years' => '2020, 2019, 2018',
            ],
            [
                'model' => 'Regency',
                'make' => 'Oldsmobile',
                'years' => '1998, 1997',
            ],
            [
                'model' => 'Regular Cab',
                'make' => 'Isuzu',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Regular Cab',
                'make' => 'Nissan',
                'years' => '1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Regular Cab',
                'make' => 'Toyota',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Relay',
                'make' => 'Saturn',
                'years' => '2007, 2006, 2005',
            ],
            [
                'model' => 'Rendezvous',
                'make' => 'Buick',
                'years' => '2007, 2006, 2005, 2004, 2003, 2002',
            ],
            [
                'model' => 'Renegade',
                'make' => 'Jeep',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Reno',
                'make' => 'Suzuki',
                'years' => '2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Ridgeline',
                'make' => 'Honda',
                'years' => '2021, 2020, 2019, 2018, 2017, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Rio',
                'make' => 'Kia',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Riviera',
                'make' => 'Buick',
                'years' => '1999, 1998, 1997, 1996, 1995, 1993, 1992',
            ],
            [
                'model' => 'RL',
                'make' => 'Acura',
                'years' => '2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'RLX',
                'make' => 'Acura',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'RLX Sport Hybrid',
                'make' => 'Acura',
                'years' => '2020, 2019, 2018, 2017, 2016, 2014',
            ],
            [
                'model' => 'Roadmaster',
                'make' => 'Buick',
                'years' => '1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Roadster',
                'make' => 'MINI',
                'years' => '2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'Rocky',
                'make' => 'Daihatsu',
                'years' => '1992',
            ],
            [
                'model' => 'Rodeo',
                'make' => 'Isuzu',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Rodeo Sport',
                'make' => 'Isuzu',
                'years' => '2003, 2002, 2001',
            ],
            [
                'model' => 'Rogue',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'Rogue Select',
                'make' => 'Nissan',
                'years' => '2015, 2014',
            ],
            [
                'model' => 'Rogue Sport',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Roma',
                'make' => 'Ferrari',
                'years' => '2021',
            ],
            [
                'model' => 'Rondo',
                'make' => 'Kia',
                'years' => '2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Routan',
                'make' => 'Volkswagen',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009',
            ],
            [
                'model' => 'RS 3',
                'make' => 'Audi',
                'years' => '2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'RS 4',
                'make' => 'Audi',
                'years' => '2008, 2007',
            ],
            [
                'model' => 'RS 5',
                'make' => 'Audi',
                'years' => '2021, 2019, 2018, 2015, 2014, 2013',
            ],
            [
                'model' => 'RS 6',
                'make' => 'Audi',
                'years' => '2021, 2003',
            ],
            [
                'model' => 'RS 7',
                'make' => 'Audi',
                'years' => '2021, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'RS Q8',
                'make' => 'Audi',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'RSX',
                'make' => 'Acura',
                'years' => '2006, 2005, 2004, 2003, 2002',
            ],
            [
                'model' => 'RX',
                'make' => 'Lexus',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'RX-7',
                'make' => 'MAZDA',
                'years' => '1995, 1994, 1993',
            ],
            [
                'model' => 'RX-8',
                'make' => 'MAZDA',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'S-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994',
            ],
            [
                'model' => 'S-Series',
                'make' => 'Saturn',
                'years' => '2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'S-Type',
                'make' => 'Jaguar',
                'years' => '2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'S10 Blazer',
                'make' => 'Chevrolet',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'S10 Crew Cab',
                'make' => 'Chevrolet',
                'years' => '2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'S10 Extended Cab',
                'make' => 'Chevrolet',
                'years' => '2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'S10 Regular Cab',
                'make' => 'Chevrolet',
                'years' => '2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'S2000',
                'make' => 'Honda',
                'years' => '2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'S3',
                'make' => 'Audi',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'S4',
                'make' => 'Audi',
                'years' => '2021, 2020, 2019, 2018, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2002, 2001, 2000, 1994, 1993, 1992',
            ],
            [
                'model' => 'S4 (2005.5)',
                'make' => 'Audi',
                'years' => '2005',
            ],
            [
                'model' => 'S40',
                'make' => 'Volvo',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'S40 (New)',
                'make' => 'Volvo',
                'years' => '2004',
            ],
            [
                'model' => 'S5',
                'make' => 'Audi',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'S6',
                'make' => 'Audi',
                'years' => '2021, 2020, 2018, 2017, 2016, 2015, 2014, 2013, 2011, 2010, 2009, 2008, 2007, 2003, 2002, 1995',
            ],
            [
                'model' => 'S60',
                'make' => 'Volvo',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'S7',
                'make' => 'Audi',
                'years' => '2021, 2020, 2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'S70',
                'make' => 'Volvo',
                'years' => '2000, 1999, 1998',
            ],
            [
                'model' => 'S8',
                'make' => 'Audi',
                'years' => '2021, 2020, 2018, 2017, 2016, 2015, 2014, 2013, 2009, 2008, 2007, 2003, 2002, 2001',
            ],
            [
                'model' => 'S80',
                'make' => 'Volvo',
                'years' => '2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'S90',
                'make' => 'Volvo',
                'years' => '2021, 2020, 2019, 2018, 2017, 1998, 1997',
            ],
            [
                'model' => 'Sable',
                'make' => 'Mercury',
                'years' => '2009, 2008, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Safari Cargo',
                'make' => 'GMC',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Safari Passenger',
                'make' => 'GMC',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Samurai',
                'make' => 'Suzuki',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Santa Fe',
                'make' => 'Hyundai',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Santa Fe Hybrid',
                'make' => 'Hyundai',
                'years' => '2022, 2021',
            ],
            [
                'model' => 'Santa Fe Plug-in Hybrid',
                'make' => 'Hyundai',
                'years' => '2022',
            ],
            [
                'model' => 'Santa Fe Sport',
                'make' => 'Hyundai',
                'years' => '2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'Santa Fe XL',
                'make' => 'Hyundai',
                'years' => '2019',
            ],
            [
                'model' => 'Savana 1500 Cargo',
                'make' => 'GMC',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'Savana 1500 Passenger',
                'make' => 'GMC',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'Savana 2500 Cargo',
                'make' => 'GMC',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'Savana 2500 Passenger',
                'make' => 'GMC',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'Savana 3500 Cargo',
                'make' => 'GMC',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'Savana 3500 Passenger',
                'make' => 'GMC',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'SC',
                'make' => 'Lexus',
                'years' => '2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Scoupe',
                'make' => 'Hyundai',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Sebring',
                'make' => 'Chrysler',
                'years' => '2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Sedona',
                'make' => 'Kia',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002',
            ],
            [
                'model' => 'Seltos',
                'make' => 'Kia',
                'years' => '2021',
            ],
            [
                'model' => 'Sentra',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Sephia',
                'make' => 'Kia',
                'years' => '2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994',
            ],
            [
                'model' => 'Sequoia',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Seville',
                'make' => 'Cadillac',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'SF90',
                'make' => 'Ferrari',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'Shadow',
                'make' => 'Dodge',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Sidekick',
                'make' => 'Suzuki',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Sienna',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'Sierra (Classic) 1500 Crew Cab',
                'make' => 'GMC',
                'years' => '2007',
            ],
            [
                'model' => 'Sierra (Classic) 1500 Extended Cab',
                'make' => 'GMC',
                'years' => '2007',
            ],
            [
                'model' => 'Sierra (Classic) 1500 HD Crew Cab',
                'make' => 'GMC',
                'years' => '2007',
            ],
            [
                'model' => 'Sierra (Classic) 1500 Regular Cab',
                'make' => 'GMC',
                'years' => '2007',
            ],
            [
                'model' => 'Sierra (Classic) 2500 Crew Cab',
                'make' => 'GMC',
                'years' => '2000',
            ],
            [
                'model' => 'Sierra (Classic) 2500 HD Crew Cab',
                'make' => 'GMC',
                'years' => '2007',
            ],
            [
                'model' => 'Sierra (Classic) 2500 HD Extended Cab',
                'make' => 'GMC',
                'years' => '2007, 2000',
            ],
            [
                'model' => 'Sierra (Classic) 2500 HD Regular Cab',
                'make' => 'GMC',
                'years' => '2007, 2000',
            ],
            [
                'model' => 'Sierra (Classic) 3500 Crew Cab',
                'make' => 'GMC',
                'years' => '2007, 2000',
            ],
            [
                'model' => 'Sierra (Classic) 3500 Extended Cab',
                'make' => 'GMC',
                'years' => '2007, 2000',
            ],
            [
                'model' => 'Sierra (Classic) 3500 Regular Cab',
                'make' => 'GMC',
                'years' => '2007, 2000',
            ],
            [
                'model' => 'Sierra 1500 Crew Cab',
                'make' => 'GMC',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Sierra 1500 Double Cab',
                'make' => 'GMC',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'Sierra 1500 Extended Cab',
                'make' => 'GMC',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Sierra 1500 HD Crew Cab',
                'make' => 'GMC',
                'years' => '2006, 2005, 2003, 2002, 2001',
            ],
            [
                'model' => 'Sierra 1500 Limited Double Cab',
                'make' => 'GMC',
                'years' => '2019',
            ],
            [
                'model' => 'Sierra 1500 Regular Cab',
                'make' => 'GMC',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Sierra 2500 Crew Cab',
                'make' => 'GMC',
                'years' => '2004',
            ],
            [
                'model' => 'Sierra 2500 Extended Cab',
                'make' => 'GMC',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Sierra 2500 HD Crew Cab',
                'make' => 'GMC',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Sierra 2500 HD Double Cab',
                'make' => 'GMC',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Sierra 2500 HD Extended Cab',
                'make' => 'GMC',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Sierra 2500 HD Regular Cab',
                'make' => 'GMC',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Sierra 2500 Regular Cab',
                'make' => 'GMC',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Sierra 3500 Crew Cab',
                'make' => 'GMC',
                'years' => '2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Sierra 3500 Extended Cab',
                'make' => 'GMC',
                'years' => '2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Sierra 3500 HD Crew Cab',
                'make' => 'GMC',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Sierra 3500 HD Double Cab',
                'make' => 'GMC',
                'years' => '2021, 2020, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Sierra 3500 HD Extended Cab',
                'make' => 'GMC',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Sierra 3500 HD Regular Cab',
                'make' => 'GMC',
                'years' => '2021, 2020, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Sierra 3500 Regular Cab',
                'make' => 'GMC',
                'years' => '2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Silhouette',
                'make' => 'Oldsmobile',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Silverado (Classic) 1500 Crew Cab',
                'make' => 'Chevrolet',
                'years' => '2007',
            ],
            [
                'model' => 'Silverado (Classic) 1500 Extended Cab',
                'make' => 'Chevrolet',
                'years' => '2007',
            ],
            [
                'model' => 'Silverado (Classic) 1500 HD Crew Cab',
                'make' => 'Chevrolet',
                'years' => '2007',
            ],
            [
                'model' => 'Silverado (Classic) 1500 Regular Cab',
                'make' => 'Chevrolet',
                'years' => '2007',
            ],
            [
                'model' => 'Silverado (Classic) 2500 HD Crew Cab',
                'make' => 'Chevrolet',
                'years' => '2007',
            ],
            [
                'model' => 'Silverado (Classic) 2500 HD Extended Cab',
                'make' => 'Chevrolet',
                'years' => '2007',
            ],
            [
                'model' => 'Silverado (Classic) 2500 HD Regular Cab',
                'make' => 'Chevrolet',
                'years' => '2007',
            ],
            [
                'model' => 'Silverado (Classic) 3500 Crew Cab',
                'make' => 'Chevrolet',
                'years' => '2007',
            ],
            [
                'model' => 'Silverado (Classic) 3500 Extended Cab',
                'make' => 'Chevrolet',
                'years' => '2007',
            ],
            [
                'model' => 'Silverado (Classic) 3500 Regular Cab',
                'make' => 'Chevrolet',
                'years' => '2007',
            ],
            [
                'model' => 'Silverado 1500 Crew Cab',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Silverado 1500 Double Cab',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'Silverado 1500 Extended Cab',
                'make' => 'Chevrolet',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Silverado 1500 HD Crew Cab',
                'make' => 'Chevrolet',
                'years' => '2006, 2005, 2003, 2002, 2001',
            ],
            [
                'model' => 'Silverado 1500 LD Double Cab',
                'make' => 'Chevrolet',
                'years' => '2019',
            ],
            [
                'model' => 'Silverado 1500 Regular Cab',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Silverado 2500 Crew Cab',
                'make' => 'Chevrolet',
                'years' => '2004',
            ],
            [
                'model' => 'Silverado 2500 Extended Cab',
                'make' => 'Chevrolet',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Silverado 2500 HD Crew Cab',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Silverado 2500 HD Double Cab',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Silverado 2500 HD Extended Cab',
                'make' => 'Chevrolet',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Silverado 2500 HD Regular Cab',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Silverado 2500 Regular Cab',
                'make' => 'Chevrolet',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Silverado 3500 Crew Cab',
                'make' => 'Chevrolet',
                'years' => '2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Silverado 3500 Extended Cab',
                'make' => 'Chevrolet',
                'years' => '2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Silverado 3500 HD Crew Cab',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Silverado 3500 HD Double Cab',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Silverado 3500 HD Extended Cab',
                'make' => 'Chevrolet',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Silverado 3500 HD Regular Cab',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Silverado 3500 Regular Cab',
                'make' => 'Chevrolet',
                'years' => '2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Sixty Special',
                'make' => 'Cadillac',
                'years' => '1993',
            ],
            [
                'model' => 'SKY',
                'make' => 'Saturn',
                'years' => '2009, 2008, 2007',
            ],
            [
                'model' => 'Skylark',
                'make' => 'Buick',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'SL',
                'make' => 'Mercedes-Benz',
                'years' => '2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'SL-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2015, 2014, 2013, 2012, 2011, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994',
            ],
            [
                'model' => 'SLC',
                'make' => 'Mercedes-Benz',
                'years' => '2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'SLK',
                'make' => 'Mercedes-Benz',
                'years' => '2016',
            ],
            [
                'model' => 'SLK-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'SLR McLaren',
                'make' => 'Mercedes-Benz',
                'years' => '2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'SLS-Class',
                'make' => 'Mercedes-Benz',
                'years' => '2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => 'SLX',
                'make' => 'Acura',
                'years' => '1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'Solara',
                'make' => 'Toyota',
                'years' => '2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Solstice',
                'make' => 'Pontiac',
                'years' => '2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Sonata',
                'make' => 'Hyundai',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Sonata Hybrid',
                'make' => 'Hyundai',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'Sonata Plug-in Hybrid',
                'make' => 'Hyundai',
                'years' => '2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'Sonic',
                'make' => 'Chevrolet',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'Sonoma Club Cab',
                'make' => 'GMC',
                'years' => '1992',
            ],
            [
                'model' => 'Sonoma Club Coupe Cab',
                'make' => 'GMC',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993',
            ],
            [
                'model' => 'Sonoma Crew Cab',
                'make' => 'GMC',
                'years' => '2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Sonoma Extended Cab',
                'make' => 'GMC',
                'years' => '2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Sonoma Regular Cab',
                'make' => 'GMC',
                'years' => '2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Sorento',
                'make' => 'Kia',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Sorento Hybrid',
                'make' => 'Kia',
                'years' => '2021',
            ],
            [
                'model' => 'Soul',
                'make' => 'Kia',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010',
            ],
            [
                'model' => 'Soul EV',
                'make' => 'Kia',
                'years' => '2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Spacecab',
                'make' => 'Isuzu',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Spark',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'Spark EV',
                'make' => 'Chevrolet',
                'years' => '2016, 2015, 2014',
            ],
            [
                'model' => 'Spectra',
                'make' => 'Kia',
                'years' => '2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'Spider',
                'make' => 'Alfa Romeo',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Spirit',
                'make' => 'Dodge',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Sportage',
                'make' => 'Kia',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Sportvan G10',
                'make' => 'Chevrolet',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'Sportvan G20',
                'make' => 'Chevrolet',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Sportvan G30',
                'make' => 'Chevrolet',
                'years' => '1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Sprinter 1500 Cargo',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Sprinter 1500 Cargo',
                'make' => 'Freightliner',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Sprinter 1500 Passenger',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Sprinter 1500 Passenger',
                'make' => 'Freightliner',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Sprinter 2500 Cargo',
                'make' => 'Dodge',
                'years' => '2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Sprinter 2500 Cargo',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => 'Sprinter 2500 Cargo',
                'make' => 'Freightliner',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'Sprinter 2500 Crew',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => 'Sprinter 2500 Crew',
                'make' => 'Freightliner',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'Sprinter 2500 Passenger',
                'make' => 'Dodge',
                'years' => '2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Sprinter 2500 Passenger',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => 'Sprinter 2500 Passenger',
                'make' => 'Freightliner',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'Sprinter 3500 Cargo',
                'make' => 'Dodge',
                'years' => '2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Sprinter 3500 Cargo',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => 'Sprinter 3500 Cargo',
                'make' => 'Freightliner',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'Sprinter 3500 Crew',
                'make' => 'Freightliner',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Sprinter 3500 Crew',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Sprinter 3500 XD Cargo',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Sprinter 3500 XD Crew',
                'make' => 'Freightliner',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Sprinter 3500 XD Crew',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Sprinter 3500XD Cargo',
                'make' => 'Freightliner',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Sprinter 4500 Cargo',
                'make' => 'Freightliner',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Sprinter 4500 Cargo',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Sprinter 4500 Crew',
                'make' => 'Mercedes-Benz',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Sprinter 4500 Crew',
                'make' => 'Freightliner',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'Sprinter WORKER Cargo',
                'make' => 'Freightliner',
                'years' => '2018, 2017',
            ],
            [
                'model' => 'Sprinter WORKER Cargo',
                'make' => 'Mercedes-Benz',
                'years' => '2018, 2017',
            ],
            [
                'model' => 'Sprinter WORKER Passenger',
                'make' => 'Mercedes-Benz',
                'years' => '2017',
            ],
            [
                'model' => 'Sprinter WORKER Passenger',
                'make' => 'Freightliner',
                'years' => '2017',
            ],
            [
                'model' => 'Spyder',
                'make' => 'Maserati',
                'years' => '2005',
            ],
            [
                'model' => 'SQ5',
                'make' => 'Audi',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'SQ5 Sportback',
                'make' => 'Audi',
                'years' => '2021',
            ],
            [
                'model' => 'SQ7',
                'make' => 'Audi',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'SQ8',
                'make' => 'Audi',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'SRX',
                'make' => 'Cadillac',
                'years' => '2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'SS',
                'make' => 'Chevrolet',
                'years' => '2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'SSR',
                'make' => 'Chevrolet',
                'years' => '2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Stanza',
                'make' => 'Nissan',
                'years' => '1992',
            ],
            [
                'model' => 'Stealth',
                'make' => 'Dodge',
                'years' => '1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Stelvio',
                'make' => 'Alfa Romeo',
                'years' => '2021, 2020, 2019, 2018',
            ],
            [
                'model' => 'Stinger',
                'make' => 'Kia',
                'years' => '2022, 2021, 2020, 2019, 2018',
            ],
            [
                'model' => 'Storm',
                'make' => 'Geo',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'Stratus',
                'make' => 'Dodge',
                'years' => '2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'STS',
                'make' => 'Cadillac',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Stylus',
                'make' => 'Isuzu',
                'years' => '1993, 1992',
            ],
            [
                'model' => 'Suburban',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Suburban 1500',
                'make' => 'Chevrolet',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Suburban 1500',
                'make' => 'GMC',
                'years' => '1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Suburban 2500',
                'make' => 'Chevrolet',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Suburban 2500',
                'make' => 'GMC',
                'years' => '1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Suburban 3500HD',
                'make' => 'Chevrolet',
                'years' => '2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'Summit',
                'make' => 'Eagle',
                'years' => '1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Sunbird',
                'make' => 'Pontiac',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Sundance',
                'make' => 'Plymouth',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Sunfire',
                'make' => 'Pontiac',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Supra',
                'make' => 'Toyota',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'SVX',
                'make' => 'Subaru',
                'years' => '1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Swift',
                'make' => 'Suzuki',
                'years' => '2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'SX4',
                'make' => 'Suzuki',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'T100 Regular Cab',
                'make' => 'Toyota',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993',
            ],
            [
                'model' => 'T100 Xtracab',
                'make' => 'Toyota',
                'years' => '1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Tacoma Access Cab',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Tacoma Double Cab',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Tacoma Regular Cab',
                'make' => 'Toyota',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Tacoma Xtracab',
                'make' => 'Toyota',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Tahoe',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Tahoe (New)',
                'make' => 'Chevrolet',
                'years' => '2000',
            ],
            [
                'model' => 'Talon',
                'make' => 'Eagle',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Taurus',
                'make' => 'Ford',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Taurus X',
                'make' => 'Ford',
                'years' => '2009, 2008',
            ],
            [
                'model' => 'Taycan',
                'make' => 'Porsche',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'tC',
                'make' => 'Scion',
                'years' => '2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Telluride',
                'make' => 'Kia',
                'years' => '2022, 2021, 2020',
            ],
            [
                'model' => 'Tempo',
                'make' => 'Ford',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Tercel',
                'make' => 'Toyota',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Terrain',
                'make' => 'GMC',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010',
            ],
            [
                'model' => 'Terraza',
                'make' => 'Buick',
                'years' => '2007, 2006, 2005',
            ],
            [
                'model' => 'Thunderbird',
                'make' => 'Ford',
                'years' => '2005, 2004, 2003, 2002, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Tiburon',
                'make' => 'Hyundai',
                'years' => '2008, 2007, 2006, 2005, 2004, 2003, 2001, 2000, 1999, 1998, 1997',
            ],
            [
                'model' => 'Tiguan',
                'make' => 'Volkswagen',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009',
            ],
            [
                'model' => 'Tiguan Limited',
                'make' => 'Volkswagen',
                'years' => '2018, 2017',
            ],
            [
                'model' => 'Titan Crew Cab',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Titan King Cab',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'TITAN Single Cab',
                'make' => 'Nissan',
                'years' => '2019, 2018, 2017',
            ],
            [
                'model' => 'TITAN XD Crew Cab',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'TITAN XD King Cab',
                'make' => 'Nissan',
                'years' => '2019, 2018, 2017',
            ],
            [
                'model' => 'TITAN XD Single Cab',
                'make' => 'Nissan',
                'years' => '2019, 2018, 2017',
            ],
            [
                'model' => 'TL',
                'make' => 'Acura',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'TLX',
                'make' => 'Acura',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Topaz',
                'make' => 'Mercury',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Toronado',
                'make' => 'Oldsmobile',
                'years' => '1992',
            ],
            [
                'model' => 'Torrent',
                'make' => 'Pontiac',
                'years' => '2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'Touareg',
                'make' => 'Volkswagen',
                'years' => '2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Touareg 2',
                'make' => 'Volkswagen',
                'years' => '2009, 2008',
            ],
            [
                'model' => 'Town & Country',
                'make' => 'Chrysler',
                'years' => '2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Town Car',
                'make' => 'Lincoln',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Tracer',
                'make' => 'Mercury',
                'years' => '1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Tracker',
                'make' => 'Chevrolet',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'Tracker',
                'make' => 'Geo',
                'years' => '1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Trailblazer',
                'make' => 'Chevrolet',
                'years' => '2021, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002',
            ],
            [
                'model' => 'Trans Sport',
                'make' => 'Pontiac',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Transit 150 Cargo Van',
                'make' => 'Ford',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'Transit 150 Crew Van',
                'make' => 'Ford',
                'years' => '2020',
            ],
            [
                'model' => 'Transit 150 Passenger Van',
                'make' => 'Ford',
                'years' => '2020',
            ],
            [
                'model' => 'Transit 150 Van',
                'make' => 'Ford',
                'years' => '2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Transit 150 Wagon',
                'make' => 'Ford',
                'years' => '2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Transit 250 Cargo Van',
                'make' => 'Ford',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'Transit 250 Crew Van',
                'make' => 'Ford',
                'years' => '2020',
            ],
            [
                'model' => 'Transit 250 Van',
                'make' => 'Ford',
                'years' => '2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Transit 350 Cargo Van',
                'make' => 'Ford',
                'years' => '2020',
            ],
            [
                'model' => 'Transit 350 Crew Van',
                'make' => 'Ford',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'Transit 350 HD Cargo Van',
                'make' => 'Ford',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'Transit 350 HD Crew Van',
                'make' => 'Ford',
                'years' => '2020',
            ],
            [
                'model' => 'Transit 350 HD Van',
                'make' => 'Ford',
                'years' => '2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Transit 350 Passenger Van',
                'make' => 'Ford',
                'years' => '2020',
            ],
            [
                'model' => 'Transit 350 Van',
                'make' => 'Ford',
                'years' => '2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Transit 350 Wagon',
                'make' => 'Ford',
                'years' => '2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Transit Connect Cargo',
                'make' => 'Ford',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010',
            ],
            [
                'model' => 'Transit Connect Cargo Van',
                'make' => 'Ford',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'Transit Connect Passenger',
                'make' => 'Ford',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010',
            ],
            [
                'model' => 'Transit Connect Passenger Wagon',
                'make' => 'Ford',
                'years' => '2022, 2021, 2020',
            ],
            [
                'model' => 'Traverse',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009',
            ],
            [
                'model' => 'Trax',
                'make' => 'Chevrolet',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Tribeca',
                'make' => 'Subaru',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'Tribute',
                'make' => 'MAZDA',
                'years' => '2011, 2010, 2009, 2008, 2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'Trooper',
                'make' => 'Isuzu',
                'years' => '2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'TSX',
                'make' => 'Acura',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'TT',
                'make' => 'Audi',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2006, 2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'Tucson',
                'make' => 'Hyundai',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Tucson Hybrid',
                'make' => 'Hyundai',
                'years' => '2022',
            ],
            [
                'model' => 'Tucson Plug-in Hybrid',
                'make' => 'Hyundai',
                'years' => '2022',
            ],
            [
                'model' => 'Tundra Access Cab',
                'make' => 'Toyota',
                'years' => '2006, 2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'Tundra CrewMax',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Tundra Double Cab',
                'make' => 'Toyota',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'Tundra Regular Cab',
                'make' => 'Toyota',
                'years' => '2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'Uplander Cargo',
                'make' => 'Chevrolet',
                'years' => '2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Uplander Passenger',
                'make' => 'Chevrolet',
                'years' => '2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'Urus',
                'make' => 'Lamborghini',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'UX',
                'make' => 'Lexus',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'V40',
                'make' => 'Volvo',
                'years' => '2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'V50',
                'make' => 'Volvo',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => 'V60',
                'make' => 'Volvo',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'V70',
                'make' => 'Volvo',
                'years' => '2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998',
            ],
            [
                'model' => 'V90',
                'make' => 'Volvo',
                'years' => '2021, 2020, 2019, 2018, 2017, 1998, 1997',
            ],
            [
                'model' => 'Vandura 1500',
                'make' => 'GMC',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Vandura 2500',
                'make' => 'GMC',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Vandura 3500',
                'make' => 'GMC',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Vandura G1500',
                'make' => 'GMC',
                'years' => '1995',
            ],
            [
                'model' => 'Vandura G2500',
                'make' => 'GMC',
                'years' => '1995',
            ],
            [
                'model' => 'Vandura G3500',
                'make' => 'GMC',
                'years' => '1996, 1995',
            ],
            [
                'model' => 'Vanquish',
                'make' => 'Aston Martin',
                'years' => '2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'Vanquish S',
                'make' => 'Aston Martin',
                'years' => '2018, 2006, 2005',
            ],
            [
                'model' => 'Vantage',
                'make' => 'Aston Martin',
                'years' => '2021, 2020, 2019, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => 'VehiCROSS',
                'make' => 'Isuzu',
                'years' => '2001, 2000, 1999',
            ],
            [
                'model' => 'Veloster',
                'make' => 'Hyundai',
                'years' => '2021, 2020, 2019, 2017, 2016, 2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'Venture Cargo',
                'make' => 'Chevrolet',
                'years' => '2005, 2004, 2003, 2002, 2000, 1999, 1998',
            ],
            [
                'model' => 'Venture Passenger',
                'make' => 'Chevrolet',
                'years' => '2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997',
            ],
            [
                'model' => 'Venue',
                'make' => 'Hyundai',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'Venza',
                'make' => 'Toyota',
                'years' => '2021, 2015, 2014, 2013, 2012, 2011, 2010, 2009',
            ],
            [
                'model' => 'Veracruz',
                'make' => 'Hyundai',
                'years' => '2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Verano',
                'make' => 'Buick',
                'years' => '2017, 2016, 2015, 2014, 2013, 2012',
            ],
            [
                'model' => 'Verona',
                'make' => 'Suzuki',
                'years' => '2006, 2005, 2004',
            ],
            [
                'model' => 'Versa',
                'make' => 'Nissan',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Versa Note',
                'make' => 'Nissan',
                'years' => '2019, 2018, 2017, 2016',
            ],
            [
                'model' => 'Vibe',
                'make' => 'Pontiac',
                'years' => '2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Vigor',
                'make' => 'Acura',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => 'Villager',
                'make' => 'Mercury',
                'years' => '2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993',
            ],
            [
                'model' => 'Viper',
                'make' => 'Dodge',
                'years' => '2017, 2016, 2015, 2010, 2009, 2008, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Viper',
                'make' => 'SRT',
                'years' => '2014, 2013',
            ],
            [
                'model' => 'Virage',
                'make' => 'Aston Martin',
                'years' => '2012',
            ],
            [
                'model' => 'Vision',
                'make' => 'Eagle',
                'years' => '1997, 1996, 1995, 1994, 1993',
            ],
            [
                'model' => 'Vitara',
                'make' => 'Suzuki',
                'years' => '2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => 'Volt',
                'make' => 'Chevrolet',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => 'Voyager',
                'make' => 'Chrysler',
                'years' => '2021, 2020, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'Voyager',
                'make' => 'Plymouth',
                'years' => '2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'VUE',
                'make' => 'Saturn',
                'years' => '2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002',
            ],
            [
                'model' => 'Windstar Cargo',
                'make' => 'Ford',
                'years' => '2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Windstar Passenger',
                'make' => 'Ford',
                'years' => '2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995',
            ],
            [
                'model' => 'Wraith',
                'make' => 'Rolls-Royce',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => 'Wrangler',
                'make' => 'Jeep',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Wrangler Unlimited',
                'make' => 'Jeep',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'Wrangler Unlimited 4xe',
                'make' => 'Jeep',
                'years' => '2021',
            ],
            [
                'model' => 'WRX',
                'make' => 'Subaru',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'X-90',
                'make' => 'Suzuki',
                'years' => '1998, 1997, 1996',
            ],
            [
                'model' => 'X-Type',
                'make' => 'Jaguar',
                'years' => '2008, 2007, 2006, 2005, 2004, 2003, 2002',
            ],
            [
                'model' => 'X1',
                'make' => 'BMW',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'X2',
                'make' => 'BMW',
                'years' => '2021, 2020, 2019, 2018',
            ],
            [
                'model' => 'X3',
                'make' => 'BMW',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'X3 M',
                'make' => 'BMW',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'X4',
                'make' => 'BMW',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'X4 M',
                'make' => 'BMW',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'X5',
                'make' => 'BMW',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'X5 M',
                'make' => 'BMW',
                'years' => '2021, 2020, 2018, 2017, 2016, 2015, 2013, 2012, 2011, 2010',
            ],
            [
                'model' => 'X6',
                'make' => 'BMW',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'X6 M',
                'make' => 'BMW',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010',
            ],
            [
                'model' => 'X7',
                'make' => 'BMW',
                'years' => '2022, 2021, 2020, 2019',
            ],
            [
                'model' => 'xA',
                'make' => 'Scion',
                'years' => '2006, 2005, 2004',
            ],
            [
                'model' => 'xB',
                'make' => 'Scion',
                'years' => '2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2006, 2005, 2004',
            ],
            [
                'model' => 'XC40',
                'make' => 'Volvo',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'XC40 Recharge',
                'make' => 'Volvo',
                'years' => '2021',
            ],
            [
                'model' => 'XC60',
                'make' => 'Volvo',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010',
            ],
            [
                'model' => 'XC70',
                'make' => 'Volvo',
                'years' => '2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'XC90',
                'make' => 'Volvo',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'xD',
                'make' => 'Scion',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => 'XE',
                'make' => 'Jaguar',
                'years' => '2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'XF',
                'make' => 'Jaguar',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009',
            ],
            [
                'model' => 'XG300',
                'make' => 'Hyundai',
                'years' => '2001',
            ],
            [
                'model' => 'XG350',
                'make' => 'Hyundai',
                'years' => '2005, 2004, 2003, 2002',
            ],
            [
                'model' => 'XJ',
                'make' => 'Jaguar',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'XK',
                'make' => 'Jaguar',
                'years' => '2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997',
            ],
            [
                'model' => 'XL-7',
                'make' => 'Suzuki',
                'years' => '2006, 2005, 2004, 2003, 2002, 2001',
            ],
            [
                'model' => 'XL7',
                'make' => 'Suzuki',
                'years' => '2009, 2008, 2007',
            ],
            [
                'model' => 'XLR',
                'make' => 'Cadillac',
                'years' => '2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => 'XT4',
                'make' => 'Cadillac',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => 'XT5',
                'make' => 'Cadillac',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => 'XT6',
                'make' => 'Cadillac',
                'years' => '2021, 2020',
            ],
            [
                'model' => 'Xterra',
                'make' => 'Nissan',
                'years' => '2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'Xtra Cab',
                'make' => 'Toyota',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'XTS',
                'make' => 'Cadillac',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => 'XV Crosstrek',
                'make' => 'Subaru',
                'years' => '2015, 2014, 2013',
            ],
            [
                'model' => 'Yaris',
                'make' => 'Toyota',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => 'Yaris Hatchback',
                'make' => 'Toyota',
                'years' => '2020',
            ],
            [
                'model' => 'Yaris iA',
                'make' => 'Toyota',
                'years' => '2018, 2017',
            ],
            [
                'model' => 'Yukon',
                'make' => 'GMC',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => 'Yukon Denali',
                'make' => 'GMC',
                'years' => '2000',
            ],
            [
                'model' => 'Yukon XL',
                'make' => 'GMC',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015',
            ],
            [
                'model' => 'Yukon XL 1500',
                'make' => 'GMC',
                'years' => '2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'Yukon XL 2500',
                'make' => 'GMC',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'Z3',
                'make' => 'BMW',
                'years' => '2002, 2001, 2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => 'Z4',
                'make' => 'BMW',
                'years' => '2021, 2020, 2019, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => 'Z4 M',
                'make' => 'BMW',
                'years' => '2008, 2007, 2006',
            ],
            [
                'model' => 'Z8',
                'make' => 'BMW',
                'years' => '2003, 2002, 2001, 2000',
            ],
            [
                'model' => 'ZDX',
                'make' => 'Acura',
                'years' => '2013, 2012, 2011, 2010',
            ],
            [
                'model' => 'Zephyr',
                'make' => 'Lincoln',
                'years' => '2006',
            ],
            [
                'model' => 'ZX2',
                'make' => 'Ford',
                'years' => '2003, 2002, 2001',
            ],
            [
                'model' => '1 Series',
                'make' => 'BMW',
                'years' => '2013, 2012, 2011, 2010, 2009, 2008',
            ],
            [
                'model' => '100',
                'make' => 'Audi',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => '124 Spider',
                'make' => 'FIAT',
                'years' => '2020, 2019, 2018, 2017',
            ],
            [
                'model' => '1500 Classic Crew Cab',
                'make' => 'Ram',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => '1500 Classic Quad Cab',
                'make' => 'Ram',
                'years' => '2021, 2020, 2019',
            ],
            [
                'model' => '1500 Classic Regular Cab',
                'make' => 'Ram',
                'years' => '2020, 2019',
            ],
            [
                'model' => '1500 Club Coupe',
                'make' => 'GMC',
                'years' => '1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '1500 Crew Cab',
                'make' => 'Ram',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => '1500 Extended Cab',
                'make' => 'Chevrolet',
                'years' => '1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '1500 Quad Cab',
                'make' => 'Ram',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => '1500 Regular Cab',
                'make' => 'Chevrolet',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '1500 Regular Cab',
                'make' => 'GMC',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '1500 Regular Cab',
                'make' => 'Ram',
                'years' => '2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => '164',
                'make' => 'Alfa Romeo',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => '190 E',
                'make' => 'Mercedes-Benz',
                'years' => '1993, 1992',
            ],
            [
                'model' => '2 Series',
                'make' => 'BMW',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => '200',
                'make' => 'Chrysler',
                'years' => '2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => '200SX',
                'make' => 'Nissan',
                'years' => '1998, 1997, 1996, 1995',
            ],
            [
                'model' => '240',
                'make' => 'Volvo',
                'years' => '1993, 1992',
            ],
            [
                'model' => '240SX',
                'make' => 'Nissan',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '2500 Club Coupe',
                'make' => 'GMC',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '2500 Crew Cab',
                'make' => 'Chevrolet',
                'years' => '2000, 1999',
            ],
            [
                'model' => '2500 Crew Cab',
                'make' => 'GMC',
                'years' => '1999',
            ],
            [
                'model' => '2500 Crew Cab',
                'make' => 'Ram',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => '2500 Extended Cab',
                'make' => 'Chevrolet',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '2500 HD Club Coupe',
                'make' => 'GMC',
                'years' => '1998, 1997',
            ],
            [
                'model' => '2500 HD Extended Cab',
                'make' => 'Chevrolet',
                'years' => '2000, 1999, 1998, 1997, 1996',
            ],
            [
                'model' => '2500 HD Extended Cab',
                'make' => 'GMC',
                'years' => '1999',
            ],
            [
                'model' => '2500 HD Regular Cab',
                'make' => 'Chevrolet',
                'years' => '2000, 1999',
            ],
            [
                'model' => '2500 HD Regular Cab',
                'make' => 'GMC',
                'years' => '1999',
            ],
            [
                'model' => '2500 Mega Cab',
                'make' => 'Ram',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => '2500 Regular Cab',
                'make' => 'Chevrolet',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '2500 Regular Cab',
                'make' => 'GMC',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '2500 Regular Cab',
                'make' => 'Ram',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => '3 Series',
                'make' => 'BMW',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '300',
                'make' => 'Chrysler',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 1999',
            ],
            [
                'model' => '300 CE',
                'make' => 'Mercedes-Benz',
                'years' => '1993, 1992',
            ],
            [
                'model' => '300 D',
                'make' => 'Mercedes-Benz',
                'years' => '1993, 1992',
            ],
            [
                'model' => '300 E',
                'make' => 'Mercedes-Benz',
                'years' => '1993, 1992',
            ],
            [
                'model' => '300 SD',
                'make' => 'Mercedes-Benz',
                'years' => '1993, 1992',
            ],
            [
                'model' => '300 SE',
                'make' => 'Mercedes-Benz',
                'years' => '1993, 1992',
            ],
            [
                'model' => '300 SL',
                'make' => 'Mercedes-Benz',
                'years' => '1993, 1992',
            ],
            [
                'model' => '300 TE',
                'make' => 'Mercedes-Benz',
                'years' => '1993, 1992',
            ],
            [
                'model' => '3000GT',
                'make' => 'Mitsubishi',
                'years' => '1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '300M',
                'make' => 'Chrysler',
                'years' => '2004, 2003, 2002, 2001, 2000',
            ],
            [
                'model' => '300ZX',
                'make' => 'Nissan',
                'years' => '1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '323',
                'make' => 'MAZDA',
                'years' => '1994, 1993, 1992',
            ],
            [
                'model' => '3500 Club Coupe',
                'make' => 'GMC',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '3500 Crew Cab',
                'make' => 'Chevrolet',
                'years' => '2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '3500 Crew Cab',
                'make' => 'GMC',
                'years' => '1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '3500 Crew Cab',
                'make' => 'Ram',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => '3500 Extended Cab',
                'make' => 'Chevrolet',
                'years' => '2000, 1999, 1998, 1997, 1996, 1994, 1993, 1992',
            ],
            [
                'model' => '3500 Extended Cab',
                'make' => 'GMC',
                'years' => '1999',
            ],
            [
                'model' => '3500 HD Extended Cab',
                'make' => 'Chevrolet',
                'years' => '1995',
            ],
            [
                'model' => '3500 HD Regular Cab',
                'make' => 'Chevrolet',
                'years' => '1995',
            ],
            [
                'model' => '3500 Mega Cab',
                'make' => 'Ram',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => '3500 Regular Cab',
                'make' => 'Chevrolet',
                'years' => '2000, 1999, 1998, 1997, 1996, 1994, 1993, 1992',
            ],
            [
                'model' => '3500 Regular Cab',
                'make' => 'GMC',
                'years' => '1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '3500 Regular Cab',
                'make' => 'Ram',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011',
            ],
            [
                'model' => '350Z',
                'make' => 'Nissan',
                'years' => '2009, 2008, 2007, 2006, 2005, 2004, 2003',
            ],
            [
                'model' => '370Z',
                'make' => 'Nissan',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009',
            ],
            [
                'model' => '4 Series',
                'make' => 'BMW',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => '400 E',
                'make' => 'Mercedes-Benz',
                'years' => '1993, 1992',
            ],
            [
                'model' => '400 SE',
                'make' => 'Mercedes-Benz',
                'years' => '1992',
            ],
            [
                'model' => '400 SEL',
                'make' => 'Mercedes-Benz',
                'years' => '1993',
            ],
            [
                'model' => '430 Scuderia',
                'make' => 'Ferrari',
                'years' => '2009, 2008',
            ],
            [
                'model' => '458 Italia',
                'make' => 'Ferrari',
                'years' => '2015, 2014, 2013, 2012, 2011, 2010',
            ],
            [
                'model' => '458 Speciale',
                'make' => 'Ferrari',
                'years' => '2015, 2014',
            ],
            [
                'model' => '458 Spider',
                'make' => 'Ferrari',
                'years' => '2015, 2014, 2013',
            ],
            [
                'model' => '488 GTB',
                'make' => 'Ferrari',
                'years' => '2019, 2018, 2017, 2016',
            ],
            [
                'model' => '488 Pista',
                'make' => 'Ferrari',
                'years' => '2021, 2020',
            ],
            [
                'model' => '488 Spider',
                'make' => 'Ferrari',
                'years' => '2019, 2018, 2017, 2016',
            ],
            [
                'model' => '4C',
                'make' => 'Alfa Romeo',
                'years' => '2018, 2017, 2016, 2015',
            ],
            [
                'model' => '4C Spider',
                'make' => 'Alfa Romeo',
                'years' => '2020, 2019, 2018, 2016, 2015',
            ],
            [
                'model' => '4Runner',
                'make' => 'Toyota',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '5 Series',
                'make' => 'BMW',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '500',
                'make' => 'FIAT',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012',
            ],
            [
                'model' => '500 Abarth',
                'make' => 'FIAT',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => '500 E',
                'make' => 'Mercedes-Benz',
                'years' => '1993, 1992',
            ],
            [
                'model' => '500 SEC',
                'make' => 'Mercedes-Benz',
                'years' => '1993',
            ],
            [
                'model' => '500 SEL',
                'make' => 'Mercedes-Benz',
                'years' => '1993, 1992',
            ],
            [
                'model' => '500 SL',
                'make' => 'Mercedes-Benz',
                'years' => '1993, 1992',
            ],
            [
                'model' => '500c',
                'make' => 'FIAT',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => '500c Abarth',
                'make' => 'FIAT',
                'years' => '2019, 2018, 2017',
            ],
            [
                'model' => '500e',
                'make' => 'FIAT',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013',
            ],
            [
                'model' => '500L',
                'make' => 'FIAT',
                'years' => '2020, 2019, 2018, 2017, 2016, 2015, 2014',
            ],
            [
                'model' => '500X',
                'make' => 'FIAT',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => '57',
                'make' => 'Maybach',
                'years' => '2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => '570GT',
                'make' => 'McLaren',
                'years' => '2019, 2018, 2017',
            ],
            [
                'model' => '570S',
                'make' => 'McLaren',
                'years' => '2020, 2019, 2018, 2017, 2016',
            ],
            [
                'model' => '599 GTB Fiorano',
                'make' => 'Ferrari',
                'years' => '2011, 2010, 2009, 2008, 2007',
            ],
            [
                'model' => '599 GTO',
                'make' => 'Ferrari',
                'years' => '2011',
            ],
            [
                'model' => '6 Series',
                'make' => 'BMW',
                'years' => '2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2010, 2009, 2008, 2007, 2006, 2005, 2004',
            ],
            [
                'model' => '600 SEC',
                'make' => 'Mercedes-Benz',
                'years' => '1993',
            ],
            [
                'model' => '600 SEL',
                'make' => 'Mercedes-Benz',
                'years' => '1993, 1992',
            ],
            [
                'model' => '600 SL',
                'make' => 'Mercedes-Benz',
                'years' => '1993',
            ],
            [
                'model' => '600LT',
                'make' => 'McLaren',
                'years' => '2020, 2019',
            ],
            [
                'model' => '612 Scaglietti',
                'make' => 'Ferrari',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006',
            ],
            [
                'model' => '62',
                'make' => 'Maybach',
                'years' => '2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => '626',
                'make' => 'MAZDA',
                'years' => '2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '650S',
                'make' => 'McLaren',
                'years' => '2016, 2015',
            ],
            [
                'model' => '675LT',
                'make' => 'McLaren',
                'years' => '2016',
            ],
            [
                'model' => '7 Series',
                'make' => 'BMW',
                'years' => '2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '718 Boxster',
                'make' => 'Porsche',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => '718 Cayman',
                'make' => 'Porsche',
                'years' => '2021, 2020, 2019, 2018, 2017',
            ],
            [
                'model' => '718 Spyder',
                'make' => 'Porsche',
                'years' => '2021, 2020',
            ],
            [
                'model' => '720S',
                'make' => 'McLaren',
                'years' => '2020, 2019, 2018',
            ],
            [
                'model' => '740',
                'make' => 'Volvo',
                'years' => '1992',
            ],
            [
                'model' => '8 Series',
                'make' => 'BMW',
                'years' => '2022, 2021, 2020, 2019, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '80',
                'make' => 'Audi',
                'years' => '1992',
            ],
            [
                'model' => '812 GTS',
                'make' => 'Ferrari',
                'years' => '2021',
            ],
            [
                'model' => '812 Superfast',
                'make' => 'Ferrari',
                'years' => '2021, 2020, 2019, 2018',
            ],
            [
                'model' => '850',
                'make' => 'Volvo',
                'years' => '1997, 1996, 1995, 1994, 1993',
            ],
            [
                'model' => '86',
                'make' => 'Toyota',
                'years' => '2020, 2019, 2018, 2017',
            ],
            [
                'model' => '88',
                'make' => 'Oldsmobile',
                'years' => '1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '9-2X',
                'make' => 'Saab',
                'years' => '2006, 2005',
            ],
            [
                'model' => '9-3',
                'make' => 'Saab',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => '9-4X',
                'make' => 'Saab',
                'years' => '2011',
            ],
            [
                'model' => '9-5',
                'make' => 'Saab',
                'years' => '2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999',
            ],
            [
                'model' => '9-7X',
                'make' => 'Saab',
                'years' => '2009, 2008, 2007, 2006, 2005',
            ],
            [
                'model' => '90',
                'make' => 'Audi',
                'years' => '1995, 1994, 1993',
            ],
            [
                'model' => '900',
                'make' => 'Saab',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '9000',
                'make' => 'Saab',
                'years' => '1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '911',
                'make' => 'Porsche',
                'years' => '2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 2009, 2008, 2007, 2006, 2005, 2004, 2003, 2002, 2001, 2000, 1999, 1998, 1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '918 Spyder',
                'make' => 'Porsche',
                'years' => '2015',
            ],
            [
                'model' => '928',
                'make' => 'Porsche',
                'years' => '1995, 1994, 1993',
            ],
            [
                'model' => '929',
                'make' => 'MAZDA',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => '940',
                'make' => 'Volvo',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => '960',
                'make' => 'Volvo',
                'years' => '1997, 1996, 1995, 1994, 1993, 1992',
            ],
            [
                'model' => '968',
                'make' => 'Porsche',
                'years' => '1995, 1994, 1993, 1992',
            ],
            [
                'model' => '98',
                'make' => 'Oldsmobile',
                'years' => '1996, 1995, 1994, 1993, 1992',
            ],
        ];

        foreach ($carsArray as $car) {
            Car::factory()->create([
                'model' => $car['model'],
                'make' => $car['make'],
                'years' => explode(',', $car['years'])
            ]);
        }
    }
}
