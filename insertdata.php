<?php 
include('db/config.php');
 include('db/sql.inc.php');


$value = $_POST['value'];
$citycode = $_POST['citycode'];
$desc = $_POST['desc'];
$code = explode(' - ', $value);
$val = $code[0];

//echo $value."**".$citycode."**".$desc."**".$val;

$form_data = array(
	'code'=>$val,
    'value'=>$value,
    'citycode'=>$citycode,
    'desc'=>$desc,
     );
    $sql1 = dbRowInsert('tbl_citycode', $form_data,$con);

 ?>
 <script> 
var projects =
[{
    value: "ADS - ADDISON, DALLAS, United States",
    citycode: "DFW",
    desc: "DALLAS, ADS - ADDISON,United States",
},{
    value: "FWH - CARSWELL AFB, DALLAS, United States",
    citycode: "DFW",
    desc: "FWH - CARSWELL AFB, DALLAS, United States",
},{
    value: "DFW - DALLAS FT WORTH INTL, DALLAS, United States",
    citycode: "DFW",
    desc: "DFW - DALLAS FT WORTH INTL, DALLAS, United States",
},{
    value: "DNE - DALLAS NORTH, DALLAS, United States",
    citycode: "DFW",
    desc: "DNE - DALLAS NORTH, DALLAS, United States",
},{
    value: "AFW - FORT WORTH ALLIANCE, DALLAS, United States",
    citycode: "DFW",
    desc: "AFW - FORT WORTH ALLIANCE, DALLAS, United States",
},{
    value: "DAL - LOVE FIELD, DALLAS, United States",
    citycode: "DFW",
    desc: "DAL - LOVE FIELD, DALLAS, United States",
},{
    value: "FTW - MEACHAM FIELD, DALLAS, United States",
    citycode: "DFW",
    desc: "FTW - MEACHAM FIELD, DALLAS, United States",
},{
    value: "RBD - REDBIRD, DALLAS, United States",
    citycode: "DFW",
    desc: "RBD - REDBIRD, DALLAS, United States",
},{
    value: "BVA - BEAUVAIS TILLE, PARIS, France",
    citycode: "PAR",
    desc: "BVA - BEAUVAIS TILLE, PARIS, France",
},{
    value: "XCR - CHALONS VATRY, PARIS, France",
    citycode: "PAR",
    desc: "XCR - CHALONS VATRY, PARIS, France",
},{
    value: "CDG - CHARLES DE GAULLE, PARIS, France",
    citycode: "PAR",
    desc: "CDG - CHARLES DE GAULLE, PARIS, France",
},{
    value: "LBG - LE BOURGET, PARIS, France",
    citycode: "PAR",
    desc: "LBG - LE BOURGET, PARIS, France",
},{
    value: "ORY - ORLY, PARIS, France",
    citycode: "PAR",
    desc: "ORY - ORLY, PARIS, France",
},{
    value: "POX - PONTOISE CORMEILLES, PARIS, France",
    citycode: "PAR",
    desc: "POX - PONTOISE CORMEILLES, PARIS, France",
},{
    value: "TNF - TOUSSUS LE NOBLE, PARIS, France",
    citycode: "PAR",
    desc: "TNF - TOUSSUS LE NOBLE, PARIS, France",
},{
    value: "VIY - VILLACOUBLAY VELIZY, PARIS, France",
    citycode: "PAR",
    desc: "VIY - VILLACOUBLAY VELIZY, PARIS, France",
},{
    value: "BWI - BALT/WASH INTL, WASHINGTON, United States",
    citycode: "WAS",
    desc: "BWI - BALT/WASH INTL, WASHINGTON, United States",
},{
    value: "MTN - BALTIMORE GLENN MARTIN, WASHINGTON, United States",
    citycode: "WAS",
    desc: "MTN - BALTIMORE GLENN MARTIN, WASHINGTON, United States",
},{
    value: "GBO - BALTIMORE GREENBELT, WASHINGTON, United States",
    citycode: "WAS",
    desc: "GBO - BALTIMORE GREENBELT, WASHINGTON, United States",
},{
    value: "BOF - BOLLING AFB, WASHINGTON, United States",
    citycode: "WAS",
    desc: "BOF - BOLLING AFB, WASHINGTON, United States",
},{
    value: "BZS - BUZZARDS PT S, WASHINGTON, United States",
    citycode: "WAS",
    desc: "BZS - BUZZARDS PT S, WASHINGTON, United States",
},{
    value: "IAD - DULLES INTL, WASHINGTON, United States",
    citycode: "WAS",
    desc: "IAD - DULLES INTL, WASHINGTON, United States",
},{
    value: "JPN - PENTAGON ARMY, WASHINGTON, United States",
    citycode: "WAS",
    desc: "JPN - PENTAGON ARMY, WASHINGTON, United States",
},{
    value: "DCA - R REAGAN NAT, WASHINGTON, United States",
    citycode: "WAS",
    desc: "DCA - R REAGAN NAT, WASHINGTON, United States",
},{
    value: "ATL - HARTSFIELD JACKSON, ATLANTA, United States",
    citycode: "ATL",
    desc: "ATL - HARTSFIELD JACKSON, ATLANTA, United States",
},{
    value: "JAO - BEAVER RUIN, ATLANTA, United States",
    citycode: "ATL",
    desc: "JAO - BEAVER RUIN, ATLANTA, United States",
},{
    value: "PDK - DE KALB, ATLANTA, United States",
    citycode: "ATL",
    desc: "PDK - DE KALB, ATLANTA, United States",
},{
    value: "FTY - FULTON COUNTY, ATLANTA, United States",
    citycode: "ATL",
    desc: "FTY - FULTON COUNTY, ATLANTA, United States",
},{
    value: "JGL - GALLERIA, ATLANTA, United States",
    citycode: "ATL",
    desc: "JGL - GALLERIA, ATLANTA, United States",
},{
    value: "JAJ - PERIMETER MALL, ATLANTA, United States",
    citycode: "ATL",
    desc: "JAJ - PERIMETER MALL, ATLANTA, United States",
},{
    value: "JAE - TECHNOLOGY PARK, ATLANTA, United States",
    citycode: "ATL",
    desc: "JAE - TECHNOLOGY PARK, ATLANTA, United States",
},{
    value: "AAP - ANDRAU AIRPARK, HOUSTON, United States",
    citycode: "HOU",
    desc: "AAP - ANDRAU AIRPARK, HOUSTON, United States",
},{
    value: "DWH - D W HOOKS, HOUSTON,United States",
    citycode: "HOU",
    desc: "DWH - D W HOOKS, HOUSTON, United States",
},{
    value: "EFD - ELLINGTON FIELD, HOUSTON,United States",
    citycode: "HOU",
    desc: "EFD - ELLINGTON FIELD, HOUSTON,United States",
},{
    value: "IAH - G.BUSH INTERCONT, HOUSTON,United States",
    citycode: "HOU",
    desc: "IAH - G.BUSH INTERCONT, HOUSTON,United States",
},{
    value: "HOU - HOBBY, HOUSTON,United States",
    citycode: "HOU",
    desc: "HOU - HOBBY, HOUSTON,United States",
},{
    value: "SPX - SPACELAND, HOUSTON,United States",
    citycode: "HOU",
    desc: "SPX - SPACELAND, HOUSTON,United States",
},{
    value: "IWS - WEST HOUSTON,United States",
    citycode: "HOU",
    desc: "IWS - WEST HOUSTON,United States",
},{
    value: "BQH - BIGGIN HILL,LONDON,United Kingdom",
    citycode: "LON",
    desc: "BQH - BIGGIN HILL,LONDON,United Kingdom",
},{
    value: "LGW - GATWICK,LONDON,United Kingdom",
    citycode: "LON",
    desc: "LGW - GATWICK,LONDON,United Kingdom",
},{
    value: "LHR - HEATHROW,LONDON,United Kingdom",
    citycode: "LON",
    desc: "LHR - HEATHROW,LONDON,United Kingdom",
},{
    value: "LCY - LONDON CITY APT,LONDON,United Kingdom",
    citycode: "LON",
    desc: "LCY - LONDON CITY APT,LONDON,United Kingdom",
},{
    value: "LTN - LUTON, LONDON,United Kingdom",
    citycode: "LON",
    desc: "LTN - LUTON, LONDON,United Kingdom",
},{
    value: "SEN - SOUTHEND, LONDON,United Kingdom",
    citycode: "LON",
    desc: "SEN - SOUTHEND, LONDON,United Kingdom",
},{
    value: "STN - STANSTED, LONDON,United Kingdom",
    citycode: "LON",
    desc: "STN - STANSTED, LONDON,United Kingdom",
},{
    value: "NBP - BATTERY PK CITY, NEW YORK,United States",
    citycode: "NYC",
    desc: "NBP - BATTERY PK CITY, NEW YORK,United States",
},{
    value: "NES - EAST 34ST LANDING, NEW YORK,United States",
    citycode: "NYC",
    desc: "NES - EAST 34ST LANDING, NEW YORK,United States",
},{
    value: "JFK - JOHN F KENNEDY INTL, NEW YORK,United States",
    citycode: "NYC",
    desc: "JFK - JOHN F KENNEDY INTL, NEW YORK,United States",
},{
    value: "LGA - LA GUARDIA, NEW YORK,United States",
    citycode: "NYC",
    desc: "LGA - LA GUARDIA, NEW YORK,United States",
},{
    value: "QNY - MARINE AIR, NEW YORK,United States",
    citycode: "NYC",
    desc: "QNY - MARINE AIR, NEW YORK,United States",
},{
    value: "EWR - NEWARK LIBERTY INTL, NEW YORK,United States",
    citycode: "NYC",
    desc: "EWR - NEWARK LIBERTY INTL, NEW YORK,United States",
},{
    value: "NWS - WALL STREET SPB, NEW YORK,United States",
    citycode: "NYC",
    desc: "NWS - WALL STREET SPB, NEW YORK,United States",
},{
    value: "SDM - BROWN FIELD, SAN DIEGO,United States",
    citycode: "SAN",
    desc: "SDM - BROWN FIELD, SAN DIEGO,United States",
},{
    value: "SEE - GILLESPIE, SAN DIEGO,United States",
    citycode: "SAN",
    desc: "SEE - GILLESPIE, SAN DIEGO,United States",
},{
    value: "SAN - INTERNATIONAL, SAN DIEGO,United States",
    citycode: "SAN",
    desc: "SAN - INTERNATIONAL, SAN DIEGO,United States",
},{
    value: "CLD - MC CLELLAN PALOMAR, SAN DIEGO,United States",
    citycode: "SAN",
    desc: "CLD - MC CLELLAN PALOMAR, SAN DIEGO,United States",
},{
    value: "NKX - MIRAMAR MCAS, SAN DIEGO,United States",
    citycode: "SAN",
    desc: "NKX - MIRAMAR MCAS, SAN DIEGO,United States",
},{
    value: "MYF - MONTGOMERY FLD, SAN DIEGO,United States",
    citycode: "SAN",
    desc: "MYF - MONTGOMERY FLD, SAN DIEGO,United States",
},{
    value: "NZY - NORTH ISLAND NAS, SAN DIEGO,United States",
    citycode: "SAN",
    desc: "NZY - NORTH ISLAND NAS, SAN DIEGO,United States",
},{
    value: "DWC - AL MAKTOUM INTL, DUBAI,United Arab Emirates",
    citycode: "DXB",
    desc: "DWC - AL MAKTOUM INTL, DUBAI,United Arab Emirates",
},{
    value: "DCG - DUBAI CREEK SPB, DUBAI,United Arab Emirates",
    citycode: "DXB",
    desc: "DCG - DUBAI CREEK SPB, DUBAI,United Arab Emirates",
},{
    value: "DXB - DUBAI INTL, DUBAI,United Arab Emirates",
    citycode: "DXB",
    desc: "DXB - DUBAI INTL, DUBAI,United Arab Emirates",
},{
    value: "ZJF - JEBEL ALI FREE ZONE, DUBAI,United Arab Emirates",
    citycode: "DXB",
    desc: "ZJF - JEBEL ALI FREE ZONE, DUBAI,United Arab Emirates",
},{
    value: "DJH - JEBEL ALI SPB, DUBAI,United Arab Emirates",
    citycode: "DXB",
    desc: "DJH - JEBEL ALI SPB, DUBAI,United Arab Emirates",
},{
    value: "NHD - MINHAD AB, DUBAI,United Arab Emirates",
    citycode: "DXB",
    desc: "NHD - MINHAD AB, DUBAI,United Arab Emirates",
},{
    value: "MUV - MUSTIN ALF, PHILADELPHIA,United States",
    citycode: "PHL",
    desc: "MUV - MUSTIN ALF, PHILADELPHIA,United States",
},{
    value: "PNE - NORTH, PHILADELPHIA,United States",
    citycode: "PHL",
    desc: "PNE - NORTH, PHILADELPHIA,United States",
},{
    value: "PHL - PHILADELPHIA INTL, PHILADELPHIA,United States",
    citycode: "PHL",
    desc: "PHL - PHILADELPHIA INTL, PHILADELPHIA,United States",
},{
    value: "PSQ - SPB, PHILADELPHIA,United States",
    citycode: "PHL",
    desc: "PSQ - SPB, PHILADELPHIA,United States",
},{
    value: "TTN - TRENTON-MERCER, PHILADELPHIA,United States",
    citycode: "PHL",
    desc: "TTN - TRENTON-MERCER, PHILADELPHIA,United States",
},{
    value: "BBX - WINGS FIELD, PHILADELPHIA,United States",
    citycode: "PHL",
    desc: "BBX - WINGS FIELD, PHILADELPHIA,United States",
},{
    value: "CMB - BANDARANAIKE INTL, COLOMBO,Sri Lanka",
    citycode: "CMB",
    desc: "CMB - BANDARANAIKE INTL, COLOMBO,Sri Lanka",
},{
    value: "BYV - BEIRA LAKE, COLOMBO,Sri Lanka",
    citycode: "CMB",
    desc: "BYV - BEIRA LAKE, COLOMBO,Sri Lanka",
},{
    value: "DGM - DANDUGAMA, COLOMBO,Sri Lanka",
    citycode: "CMB",
    desc: "DGM - DANDUGAMA, COLOMBO,Sri Lanka",
},{
    value: "KEZ - KELANI PELIYAGOODA SPB, COLOMBO,Sri Lanka",
    citycode: "CMB",
    desc: "KEZ - KELANI PELIYAGOODA SPB, COLOMBO,Sri Lanka",
},{
    value: "RML - RATMALANA, COLOMBO,Sri Lanka",
    citycode: "CMB",
    desc: "RML - RATMALANA, COLOMBO,Sri Lanka",
},{
    value: "HSH - HENDERSON EXECUTIVE, LAS VEGAS,United States",
    citycode: "LAS",
    desc: "HSH - HENDERSON EXECUTIVE, LAS VEGAS,United States",
},{
    value: "BLD - LAS VEGAS BOULDER ARPT, LAS VEGAS,United States",
    citycode: "LAS",
    desc: "BLD - LAS VEGAS BOULDER ARPT, LAS VEGAS,United States",
},{
    value: "LAS - MCCARRAN INTERNATIONAL, LAS VEGAS,United States",
    citycode: "LAS",
    desc: "LAS - MCCARRAN INTERNATIONAL, LAS VEGAS,United States",
},{
    value: "VGT - NORTH LAS VEGAS ARPT, LAS VEGAS,United States",
    citycode: "LAS",
    desc: "VGT - NORTH LAS VEGAS ARPT, LAS VEGAS,United States",
},{
    value: "LSV - NELLIS AFB, LAS VEGAS,United States",
    citycode: "LAS",
    desc: "LSV - NELLIS AFB, LAS VEGAS,United States",
},{
    value: "MIA - MIAMI INTL, MIAMI,United States",
    citycode: "MIA",
    desc: "MIA - MIAMI INTL, MIAMI,United States",
},{
    value: "TNT - DADE COLLIER, MIAMI,United States",
    citycode: "MIA",
    desc: "TNT - DADE COLLIER, MIAMI,United States",
},{
    value: "OPF - OPA LOCKA, MIAMI,United States",
    citycode: "MIA",
    desc: "OPF - OPA LOCKA, MIAMI,United States",
},{
    value: "MPB - SEAPLANE BASE, MIAMI,United States",
    citycode: "MIA",
    desc: "MPB - SEAPLANE BASE, MIAMI,United States",
},{
    value: "TMB - TAMIAMI, MIAMI,United States",
    citycode: "MIA",
    desc: "TMB - TAMIAMI, MIAMI,United States",
},{
    value: "DVT - DEER VALLEY, PHOENIX,United States",
    citycode: "PHX",
    desc: "DVT - DEER VALLEY, PHOENIX,United States",
},{
    value: "LUF - LUKE AFB, PHOENIX,United States",
    citycode: "PHX",
    desc: "LUF - LUKE AFB, PHOENIX,United States",
},{
    value: "AZA - MESA GATEWAY, PHOENIX,United States",
    citycode: "PHX",
    desc: "AZA - MESA GATEWAY, PHOENIX,United States",
},{
    value: "SCF - SCOTTSDALE APT, PHOENIX,United States",
    citycode: "PHX",
    desc: "SCF - SCOTTSDALE APT, PHOENIX,United States",
},{
    value: "PHX - SKY HARBOR INTL, PHOENIX,United States",
    citycode: "PHX",
    desc: "PHX - SKY HARBOR INTL, PHOENIX,United States",
},{
    value: "SAC - EXECUTIVE, SACRAMENTO,United States",
    citycode: "SAC",
    desc: "SAC - EXECUTIVE, SACRAMENTO,United States",
},{
    value: "SMF - INTERNATIONAL, SACRAMENTO,United States",
    citycode: "SAC",
    desc: "SMF - INTERNATIONAL, SACRAMENTO,United States",
},{
    value: "MHR - MATHER, SACRAMENTO,United States",
    citycode: "SAC",
    desc: "MHR - MATHER, SACRAMENTO,United States",
},{
    value: "MCC - MCCLELLAN, SACRAMENTO,United States",
    citycode: "SAC",
    desc: "MCC - MCCLELLAN, SACRAMENTO,United States",
},{
    value: "SCK - STOCKTON METROPOLITAN, SACRAMENTO,US",
    citycode: "SAC",
    desc: "SCK - STOCKTON METROPOLITAN, SACRAMENTO,US",
},{
    value: "SKF - KELLY AFB, SAN ANTONIO,US",
    citycode: "SAT",
    desc: "SKF - KELLY AFB, SAN ANTONIO,US",
},{
    value: "MDA - MARTINDALE, SAN ANTONIO,US",
    citycode: "SAT",
    desc: "MDA - MARTINDALE, SAN ANTONIO,US",
},{
    value: "RND - RANDOLPH AFB, SAN ANTONIO,US",
    citycode: "SAT",
    desc: "RND - RANDOLPH AFB, SAN ANTONIO,US",
},{
    value: "SAT - SAN ANTONIO INTL, SAN ANTONIO,US",
    citycode: "SAT",
    desc: "SAT - SAN ANTONIO INTL, SAN ANTONIO,US",
},{
    value: "SSF - STINSON MUN, SAN ANTONIO,US",
    citycode: "SAT",
    desc: "SSF - STINSON MUN, SAN ANTONIO,US",
},{
    value: "MCF - MAC DILL AFB, TAMPA,United States",
    citycode: "TPA",
    desc: "MCF - MAC DILL AFB, TAMPA,United States",
},{
    value: "TPF - PETER O KNIGHT, TAMPA,United States",
    citycode: "TPA",
    desc: "TPF - PETER O KNIGHT, TAMPA,United States",
},{
    value: "PIE - SAINT PETE CLEARWATER, TAMPA,United States",
    citycode: "TPA",
    desc: "PIE - SAINT PETE CLEARWATER, TAMPA,United States",
},{
    value: "TPA - TAMPA INTL, TAMPA,United States",
    citycode: "TPA",
    desc: "TPA - TAMPA INTL, TAMPA,United States",
},{
    value: "KYO - TOPP OF TAMPA, TAMPA,United States",
    citycode: "TPA",
    desc: "KYO - TOPP OF TAMPA, TAMPA,United States",
},{
    value: "YTZ - BILLY BISHOP CITY A/P, TORONTO,Canada",
    citycode: "YTO",
    desc: "YTZ - BILLY BISHOP CITY A/P, TORONTO,Canada",
},{
    value: "YKZ - BUTTONVILLE MUNICIPAL, TORONTO,Canada",
    citycode: "YTO",
    desc: "YKZ - BUTTONVILLE MUNICIPAL, TORONTO,Canada",
},{
    value: "YHM - HAMILTON JC MUNRO INTL, TORONTO,Canada",
    citycode: "YTO",
    desc: "YHM - HAMILTON JC MUNRO INTL, TORONTO,Canada",
},{
    value: "YYZ - LESTER B. PEARSON INTL, TORONTO,Canada",
    citycode: "YTO",
    desc: "YYZ - LESTER B. PEARSON INTL, TORONTO,Canada",
},{
    value: "YKF - REGION OF WATERLOO INT, TORONTO,Canada",
    citycode: "YTO",
    desc: "YKF - REGION OF WATERLOO INT, TORONTO,Canada",
},{
    value: "DHF - AL DHAFRA AB, ABU DHABI,United Arab Emirates",
    citycode: "AUH",
    desc: "DHF - AL DHAFRA AB, ABU DHABI,United Arab Emirates",
},{
    value: "AZI - BATEEN, ABU DHABI,United Arab Emirates",
    citycode: "AUH",
    desc: "AZI - BATEEN, ABU DHABI,United Arab Emirates",
},{
    value: "AUH - INTERNATIONAL, ABU DHABI,United Arab Emirates",
    citycode: "AUH",
    desc: "AUH - INTERNATIONAL, ABU DHABI,United Arab Emirates",
},{
    value: "AYM - YAS ISLAND SPB, ABU DHABI,United Arab Emirates",
    citycode: "AUH",
    desc: "AYM - YAS ISLAND SPB, ABU DHABI,United Arab Emirates",
},{
    value: "CHI - CHICAGO FSS, CHICAGO,United States",
    citycode: "CHI",
    desc: "CHI - CHICAGO FSS, CHICAGO,United States",
},{
    value: "NOH - CHICAGO NAS, CHICAGO,United States",
    citycode: "CHI",
    desc: "NOH - CHICAGO NAS, CHICAGO,United States",
},{
    value: "RFD - CHICAGO ROCKFORD, CHICAGO,United States",
    citycode: "CHI",
    desc: "RFD - CHICAGO ROCKFORD, CHICAGO,United States",
},{
    value: "DPA - DUPAGE COUNTY, CHICAGO,United States",
    citycode: "CHI",
    desc: "DPA - DUPAGE COUNTY, CHICAGO,United States",
},{
    value: "ORD - O HARE INTERNATIONAL ,CHICAGO,United States",
    citycode: "CHI",
    desc: "ORD - O HARE INTERNATIONAL ,CHICAGO,United States",
},{
    value: "PWK - PAL WAUKEE,CHICAGO,United States",
    citycode: "CHI",
    desc: "PWK - PAL WAUKEE,CHICAGO,United States",
},{
    value: "NGW - CABANISS,CORPUS CHRISTI,United States",
    citycode: "CRP",
    desc: "NGW - CABANISS,CORPUS CHRISTI,United States",
},{
    value: "CRP - CORPUS CHRISTI INTL,CORPUS CHRISTI,United States",
    citycode: "CRP",
    desc: "CRP - CORPUS CHRISTI INTL,CORPUS CHRISTI,United States",
},{
    value: "CUX - CUDDIHY,CORPUS CHRISTI,United States",
    citycode: "CRP",
    desc: "CUX - CUDDIHY,CORPUS CHRISTI,United States",
},{
    value: "NGP - NAS,CORPUS CHRISTI,United States",
    citycode: "CRP",
    desc: "NGP - NAS,CORPUS CHRISTI,United States",
},{
    value: "DAY - JAMES COX DAYTON, DAYTON,United States",
    citycode: "DAY",
    desc: "DAY - JAMES COX DAYTON, DAYTON,United States",
},{
    value: "FFO - PATTERSON AFB, DAYTON,United States",
    citycode: "DAY",
    desc: "FFO - PATTERSON AFB, DAYTON,United States",
},{
    value: "DWF - WRIGHT AFB, DAYTON,United States",
    citycode: "DAY",
    desc: "DWF - WRIGHT AFB, DAYTON,United States",
},{
    value: "MGY - WRIGHT BROTHERS, DAYTON,United States",
    citycode: "DAY",
    desc: "MGY - WRIGHT BROTHERS, DAYTON,United States",
},{
    value: "EIL - EIELSON AFB, FAIRBANKS,United States",
    citycode: "FAI",
    desc: "EIL - EIELSON AFB, FAIRBANKS,United States",
},{
    value: "FAI - FAIRBANKS INTL, FAIRBANKS,United States",
    citycode: "FAI",
    desc: "FAI - FAIRBANKS INTL, FAIRBANKS,United States",
},{
    value: "FBK - LADD AAF, FAIRBANKS,United States",
    citycode: "FAI",
    desc: "FBK - LADD AAF, FAIRBANKS,United States",
},{
    value: "MTX - METRO FIELD, FAIRBANKS,United States",
    citycode: "FAI",
    desc: "MTX - METRO FIELD, FAIRBANKS,United States",
},{
    value: "GDC - DONALDSON, GREENVILLE,United States",
    citycode: "GSP",
    desc: "GDC - DONALDSON, GREENVILLE,United States",
},{
    value: "GMU - DOWNTOWN, GREENVILLE,United States",
    citycode: "GSP",
    desc: "GMU - DOWNTOWN, GREENVILLE,United States",
},{
    value: "SPA - DOWNTOWN MEMORIAL, GREENVILLE,United States",
    citycode: "GSP",
    desc: "SPA - DOWNTOWN MEMORIAL, GREENVILLE,United States",
},{
    value: "GSP - SPARTANBURG, GREENVILLE,United States",
    citycode: "GSP",
    desc: "GSP - SPARTANBURG, GREENVILLE,United States",
},{
    value: "BEC - BEECH, WICHITA,United States",
    citycode: "ICT",
    desc: "BEC - BEECH, WICHITA,United States",
},{
    value: "CEA - CESSNA AIRCRAFT, WICHITA,United States",
    citycode: "ICT",
    desc: "CEA - CESSNA AIRCRAFT, WICHITA,United States",
},{
    value: "IAB - MCCONNELL AFB, WICHITA,United States",
    citycode: "ICT",
    desc: "IAB - MCCONNELL AFB, WICHITA,United States",
},{
    value: "ICT - MID CONTINENT, WICHITA,United States",
    citycode: "ICT",
    desc: "ICT - MID CONTINENT, WICHITA,United States",
},{
    value: "VQQ - CECIL FIELD NAS, JACKSONVILLE,United States",
    citycode: "JAX",
    desc: "VQQ - CECIL FIELD NAS, JACKSONVILLE,United States",
},{
    value: "CRG - CRAIG MNCPL, JACKSONVILLE,United States",
    citycode: "JAX",
    desc: "CRG - CRAIG MNCPL, JACKSONVILLE,United States",
},{
    value: "JAX - JACKSONVILLE INTL, JACKSONVILLE,United States",
    citycode: "JAX",
    desc: "JAX - JACKSONVILLE INTL, JACKSONVILLE,United States",
},{
    value: "NIP - NAS, JACKSONVILLE,United States",
    citycode: "JAX",
    desc: "NIP - NAS, JACKSONVILLE,United States",
},{
    value: "GCJ - GRAND CENTRAL, JOHANNESBURG,South Africa",
    citycode: "JNB",
    desc: "GCJ - GRAND CENTRAL, JOHANNESBURG,South Africa",
},{
    value: "HLA - LANSERIA INTL APT, JOHANNESBURG,South Africa",
    citycode: "JNB",
    desc: "HLA - LANSERIA INTL APT, JOHANNESBURG,South Africa",
},{
    value: "JNB - O.R. TAMBO INTL, JOHANNESBURG,South Africa",
    citycode: "JNB",
    desc: "JNB - O.R. TAMBO INTL, JOHANNESBURG,South Africa",
},{
    value: "QRA - RAND, JOHANNESBURG,South Africa",
    citycode: "JNB",
    desc: "QRA - RAND, JOHANNESBURG,South Africa",
},{
    value: "KCG - CHIGNIK AIRPORT, CHIGNIK,United States",
    citycode: "KCL",
    desc: "KCG - CHIGNIK AIRPORT, CHIGNIK,United States",
},{
    value: "KBW - CHIGNIK BAY SPB, CHIGNIK,United States",
    citycode: "KCL",
    desc: "KBW - CHIGNIK BAY SPB, CHIGNIK,United States",
},{
    value: "KCL - CHIGNIK LAGOON, CHIGNIK,United States",
    citycode: "KCL",
    desc: "KCL - CHIGNIK LAGOON, CHIGNIK,United States",
},{
    value: "KCQ - CHIGNIK LAKE, CHIGNIK,United States",
    citycode: "KCL",
    desc: "KCQ - CHIGNIK LAKE, CHIGNIK,United States",
},{
    value: "JCX - CITICORP, LOS ANGELES,United States",
    citycode: "LAX",
    desc: "JCX - CITICORP, LOS ANGELES,United States",
},{
    value: "LAX - LOS ANGELES INTL, LOS ANGELES,United States",
    citycode: "LAX",
    desc: "LAX - LOS ANGELES INTL, LOS ANGELES,United States",
},{
    value: "VNY - VAN NUYS, LOS ANGELES,United States",
    citycode: "LAX",
    desc: "VNY - VAN NUYS, LOS ANGELES,United States",
},{
    value: "WHP - WHITEMAN, LOS ANGELES,United States",
    citycode: "LAX",
    desc: "WHP - WHITEMAN, LOS ANGELES,United States",
},{
    value: "AVV - AVALON, MELBOURNE,Australia",
    citycode: "MEL",
    desc: "AVV - AVALON, MELBOURNE,Australia",
},{
    value: "MEB - ESSENDON, MELBOURNE,Australia",
    citycode: "MEL",
    desc: "MEB - ESSENDON, MELBOURNE,Australia",
},{
    value: "MEL - MELBOURNE AIRPORT, MELBOURNE,Australia",
    citycode: "MEL",
    desc: "MEL - MELBOURNE AIRPORT, MELBOURNE,Australia",
},{
    value: "MBW - MOORABBIN, MELBOURNE,Australia",
    citycode: "MEL",
    desc: "MBW - MOORABBIN, MELBOURNE,Australia",
},{
    value: "AZP - ATIZAPAN-JIMENEZ CANTU, MEXICO CITY,Mexico",
    citycode: "MEX",
    desc: "AZP - ATIZAPAN-JIMENEZ CANTU, MEXICO CITY,Mexico",
},{
    value: "MEX - BENITO JUAREZ INTL, MEXICO CITY,Mexico",
    citycode: "MEX",
    desc: "MEX - BENITO JUAREZ INTL, MEXICO CITY,Mexico",
},{
    value: "NLU - SANTA LUCIA AFB, MEXICO CITY,Mexico",
    citycode: "MEX",
    desc: "NLU - SANTA LUCIA AFB, MEXICO CITY,Mexico",
},{
    value: "TLC - TOLUCA-A.LOPEZ MATEOS, MEXICO CITY,Mexico",
    citycode: "MEX",
    desc: "TLC - TOLUCA-A.LOPEZ MATEOS, MEXICO CITY,Mexico",
},{
    value: "BGY - BERGAMO ORIO AL SERIO, MILAN,Italy",
    citycode: "MIL",
    desc: "BGY - BERGAMO ORIO AL SERIO, MILAN,Italy",
},{
    value: "LIN - LINATE, MILAN,Italy",
    citycode: "MIL",
    desc: "LIN - LINATE, MILAN,Italy",
},{
    value: "MXP - MALPENSA, MILAN,Italy",
    citycode: "MIL",
    desc: "MXP - MALPENSA, MILAN,Italy",
},{
    value: "PMF - PARMA, MILAN,Italy",
    citycode: "MIL",
    desc: "PMF - PARMA, MILAN,Italy",
},{
    value: "MKC - DOWNTOWN, KANSAS CITY,United States",
    citycode: "MKC",
    desc: "MKC - DOWNTOWN, KANSAS CITY,United States",
},{
    value: "OJC - JOHNSON EXEC, KANSAS CITY,United States",
    citycode: "MKC",
    desc: "OJC - JOHNSON EXEC, KANSAS CITY,United States",
},{
    value: "JCI - JOHNSON IND, KANSAS CITY,United States",
    citycode: "MKC",
    desc: "JCI - JOHNSON IND, KANSAS CITY,United States",
},{
    value: "MCI - KANSAS CITY INTL, KANSAS CITY,United States",
    citycode: "MKC",
    desc: "MCI - KANSAS CITY INTL, KANSAS CITY,United States",
},{
    value: "BKA - BYKOVO, MOSCOW, Russia",
    citycode: "MOW",
    desc: "BKA - BYKOVO, MOSCOW, Russia",
},{
    value: "DME - DOMODEDOVO, MOSCOW, Russia",
    citycode: "MOW",
    desc: "DME - DOMODEDOVO, MOSCOW, Russia",
},{
    value: "SVO - SHEREMETYEVO, MOSCOW, Russia",
    citycode: "MOW",
    desc: "SVO - SHEREMETYEVO, MOSCOW, Russia",
},{
    value: "VKO - VNUKOVO INTL, MOSCOW, Russia",
    citycode: "MOW",
    desc: "VKO - VNUKOVO INTL, MOSCOW, Russia",
},{
    value: "DWN - DOWNTOWN, OKLAHOMA CITY, United States",
    citycode: "OKC",
    desc: "DWN - DOWNTOWN, OKLAHOMA CITY, United States",
},{
    value: "TIK - TINKER AFB, OKLAHOMA CITY, United States",
    citycode: "OKC",
    desc: "TIK - TINKER AFB, OKLAHOMA CITY, United States",
},{
    value: "PWA - WILEY POST, OKLAHOMA CITY, United States",
    citycode: "OKC",
    desc: "PWA - WILEY POST, OKLAHOMA CITY, United States",
},{
    value: "OKC - WILL ROGERS WORLD, OKLAHOMA CITY, United States",
    citycode: "OKC",
    desc: "OKC - WILL ROGERS WORLD, OKLAHOMA CITY, United States",
},{
    value: "DWS - DISNEY WORLD, ORLANDO, United States",
    citycode: "ORL",
    desc: "DWS - DISNEY WORLD, ORLANDO, United States",
},{
    value: "ORL - HERNDON, ORLANDO, United States",
    citycode: "ORL",
    desc: "ORL - HERNDON, ORLANDO, United States",
},{
    value: "MCO - ORLANDO INTL, ORLANDO, United States",
    citycode: "ORL",
    desc: "MCO - ORLANDO INTL, ORLANDO, United States",
},{
    value: "SFB - ORLANDO SANFORD INTL, ORLANDO, United States",
    citycode: "ORL",
    desc: "SFB - ORLANDO SANFORD INTL, ORLANDO, United States",
},{
    value: "NDP - ELLYSON NAS,PENSACOLA, United States",
    citycode: "PNS",
    desc: "NDP - ELLYSON NAS,PENSACOLA, United States",
},{
    value: "PNS - INTERNATIONAL,PENSACOLA, United States",
    citycode: "PNS",
    desc: "PNS - INTERNATIONAL,PENSACOLA, United States",
},{
    value: "NPA - PENSACOLA,PENSACOLA, United States",
    citycode: "PNS",
    desc: "NPA - PENSACOLA,PENSACOLA, United States",
},{
    value: "NUN - SAUFLEY NAS,PENSACOLA, United States",
    citycode: "PNS",
    desc: "NUN - SAUFLEY NAS,PENSACOLA, United States",
},{
    value: "SIN - CHANGI,SINGAPORE, United States",
    citycode: "SIN",
    desc: "SIN - CHANGI,SINGAPORE,PENSACOLA, United States",
},{
    value: "QPG - PAYA LEBAR,SINGAPORE, United States",
    citycode: "SIN",
    desc: "QPG - PAYA LEBAR,PENSACOLA, United States",
},{
    value: "XSP - SELETAR, SINGAPORE, United States",
    citycode: "SIN",
    desc: "XSP - SELETAR, PENSACOLA, United States",
},{
    value: "TGA - TENGAH, SINGAPORE, United States",
    citycode: "SIN",
    desc: "TGA - TENGAH, PENSACOLA, United States",
},{
    value: "ARN - ARLANDA, STOCKHOLM, Sweden",
    citycode: "STO",
    desc: "ARN - ARLANDA, STOCKHOLM, Sweden",
},{
    value: "BMA - BROMMA, STOCKHOLM, Sweden",
    citycode: "STO",
    desc: "BMA - BROMMA, STOCKHOLM, Sweden",
},{
    value: "NYO - SKAVSTA INTL, STOCKHOLM, Sweden",
    citycode: "STO",
    desc: "NYO - SKAVSTA INTL, STOCKHOLM, Sweden",
},{
    value: "VST - VASTERAS, STOCKHOLM, Sweden",
    citycode: "STO",
    desc: "VST - VASTERAS, STOCKHOLM, Sweden",
},{
    value: "BWU - BANKSTOWN, SYDNEY, Australia",
    citycode: "SYD",
    desc: "BWU - BANKSTOWN, SYDNEY, Australia",
},{
    value: "SYD - KINGSFORD SMITH, SYDNEY, Australia",
    citycode: "SYD",
    desc: "SYD - KINGSFORD SMITH, SYDNEY, Australia",
},{
    value: "LBH - PALM BEACH SPB, SYDNEY, Australia",
    citycode: "SYD",
    desc: "LBH - PALM BEACH SPB, SYDNEY, Australia",
},{
    value: "RSE - ROSE BAY SPB, SYDNEY, Australia",
    citycode: "SYD",
    desc: "RSE - ROSE BAY SPB, SYDNEY, Australia",
},{
    value: "EDF - ELMENDORF AFB, ANCHORAGE, United States",
    citycode: "ANC",
    desc: "EDF - ELMENDORF AFB, ANCHORAGE, United States",
},{
    value: "MRI - MERRILL FIELD, ANCHORAGE, United States",
    citycode: "ANC",
    desc: "MRI - MERRILL FIELD, ANCHORAGE, United States",
},{
    value: "ANC - TED STEVENS INTL, ANCHORAGE, United States",
    citycode: "ANC",
    desc: "ANC - TED STEVENS INTL, ANCHORAGE, United States",
},{
    value: "AVP - SCRANTON INTL, SCRANTON, United States",
    citycode: "AVP",
    desc: "AVP - SCRANTON INTL, SCRANTON, United States",
},{
    value: "SCR - SCRANTON MNPL, SCRANTON, United States",
    citycode: "AVP",
    desc: "SCR - SCRANTON MNPL, SCRANTON, United States",
},{
    value: "WBW - WYOMING VAL, SCRANTON, United States",
    citycode: "AVP",
    desc: "WBW - WYOMING VAL, SCRANTON, United States",
},{
    value: "BER - BRANDENBURG, BERLIN, Germany",
    citycode: "BER",
    desc: "BER - BRANDENBURG, BERLIN, Germany",
},{
    value: "SXF - SCHOENEFELD, BERLIN, Germany",
    citycode: "BER",
    desc: "SXF - SCHOENEFELD, BERLIN, Germany",
},{
    value: "TXL - TEGEL, BERLIN, Germany",
    citycode: "BER",
    desc: "TXL - TEGEL, BERLIN, Germany",
},{
    value: "CAE - COLUMBIA MET, COLUMBIA, United States",
    citycode: "CAE",
    desc: "CAE - COLUMBIA MET, COLUMBIA, United States",
},{
    value: "MMT - MC ENTIRE ANGB, COLUMBIA, United States",
    citycode: "CAE",
    desc: "MMT - MC ENTIRE ANGB, COLUMBIA, United States",
},{
    value: "CUB - OWENS FIELD, COLUMBIA, United States",
    citycode: "CAE",
    desc: "CUB - OWENS FIELD, COLUMBIA, United States",
},{
    value: "BKL - BURKE LAKEFRON, CLEVELAND, United States",
    citycode: "CLE",
    desc: "BKL - BURKE LAKEFRON, CLEVELAND, United States",
},{
    value: "CGF - CUYAHOGA, CLEVELAND, United States",
    citycode: "CLE",
    desc: "CGF - CUYAHOGA, CLEVELAND, United States",
},{
    value: "CLE - HOPKINS INT, CLEVELAND, United States",
    citycode: "CLE",
    desc: "CLE - HOPKINS INT, CLEVELAND, United States",
},{
    value: "CMH - PORT COLUMBUS, COLUMBUS, United States",
    citycode: "CMH",
    desc: "CMH - PORT COLUMBUS, COLUMBUS, United States",
},{
    value: "LCK - RICKENBACKER, COLUMBUS, United States",
    citycode: "CMH",
    desc: "LCK - RICKENBACKER, COLUMBUS, United States",
},{
    value: "OSU - STATE UNIV, COLUMBUS, United States",
    citycode: "CMH",
    desc: "OSU - STATE UNIV, COLUMBUS, United States",
},{
    value: "COS - COLORADO SPRINGS MNPL, COLORADO SPRINGS, United States",
    citycode: "COS",
    desc: "COS - COLORADO SPRINGS MNPL, COLORADO SPRINGS, United States",
},{
    value: "FCS - FORT CARSON BUTTS AAF, COLORADO SPRINGS, United States",
    citycode: "COS",
    desc: "FCS - FORT CARSON BUTTS AAF, COLORADO SPRINGS, United States",
},{
    value: "AFF - USAF ACADEMY AIRFIELD, COLORADO SPRINGS, United States",
    citycode: "COS",
    desc: "AFF - USAF ACADEMY AIRFIELD, COLORADO SPRINGS, United States",
},{
    value: "LSF - LAWSON AAF, COLUMBUS, United States",
    citycode: "CSG",
    desc: "LSF - LAWSON AAF, COLUMBUS, United States",
},{
    value: "MKF - MCKENNA AAF, COLUMBUS, United States",
    citycode: "CSG",
    desc: "MKF - MCKENNA AAF, COLUMBUS, United States",
},{
    value: "CSG - METROPOLITAN AIRPORT, COLUMBUS, United States",
    citycode: "CSG",
    desc: "CSG - METROPOLITAN AIRPORT, COLUMBUS, United States",
},{
    value: "BFK - AURORA BUCKLEY AFB, DENVER, United States",
    citycode: "DEN",
    desc: "BFK - AURORA BUCKLEY AFB, DENVER, United States",
},{
    value: "APA - CENTENNIAL, DENVER, United States",
    citycode: "DEN",
    desc: "APA - CENTENNIAL, DENVER, United States",
},{
    value: "DEN - DENVER INTERNATIONAL, DENVER, United States",
    citycode: "DEN",
    desc: "DEN - DENVER INTERNATIONAL, DENVER, United States",
},{
    value: "DLH - DULUTH INTL, DULUTH, United States",
    citycode: "DLH",
    desc: "DLH - DULUTH INTL, DULUTH, United States",
},{
    value: "LKI - LAKESIDE USAF, DULUTH, United States",
    citycode: "DLH",
    desc: "LKI - LAKESIDE USAF, DULUTH, United States",
},{
    value: "SUW - RICHARD I BONG, DULUTH, United States",
    citycode: "DLH",
    desc: "SUW - RICHARD I BONG, DULUTH, United States",
},{
    value: "DET - DETROIT CITY, DETROIT, United States",
    citycode: "DTT",
    desc: "DET - DETROIT CITY, DETROIT, United States",
},{
    value: "DTW - DETROIT METRO, DETROIT, United States",
    citycode: "DTT",
    desc: "DTW - DETROIT METRO, DETROIT, United States",
},{
    value: "YIP - WILLOW RUN, DETROIT, United States",
    citycode: "DTT",
    desc: "YIP - WILLOW RUN, DETROIT, United States",
},{
    value: "DUS - INTERNATIONAL AIRPORT, DUESSELDORF, Germany",
    citycode: "DUS",
    desc: "DUS - INTERNATIONAL AIRPORT, DUESSELDORF, Germany",
},{
    value: "MGL - MOENCHENGLADBACH APT, DUESSELDORF, Germany",
    citycode: "DUS",
    desc: "MGL - MOENCHENGLADBACH APT, DUESSELDORF, Germany",
},{
    value: "NRN - WEEZE AIRPORT, DUESSELDORF, Germany",
    citycode: "DUS",
    desc: "NRN - WEEZE AIRPORT, DUESSELDORF, Germany",
},{
    value: "MZM - FRESCATY, METZ NANCY, France",
    citycode: "ETZ",
    desc: "MZM - FRESCATY, METZ NANCY, France",
},{
    value: "ETZ - LORRAINE, METZ NANCY, France",
    citycode: "ETZ",
    desc: "ETZ - LORRAINE, METZ NANCY, France",
},{
    value: "ENC - NANCY ESSEY, METZ NANCY, France",
    citycode: "ETZ",
    desc: "ENC - NANCY ESSEY, METZ NANCY, France",
},{
    value: "FLG - FLAGSTAFF PULLIAM, GRAND CANYON,United States",
    citycode: "GCN",
    desc: "FLG - FLAGSTAFF PULLIAM, GRAND CANYON,United States",
},{
    value: "NGC - NORTH RIM, GRAND CANYON,United States",
    citycode: "GCN",
    desc: "NGC - NORTH RIM, GRAND CANYON,United States",
},{
    value: "GCN - NATIONAL, GRAND CANYON,United States",
    citycode: "GCN",
    desc: "GCN - NATIONAL, GRAND CANYON,United States",
},{
    value: "SKA - FAIRCHILD AFB, SPOKANE,United States",
    citycode: "GEG",
    desc: "SKA - FAIRCHILD AFB, SPOKANE,United States",
},{
    value: "SFF - FELTS FIELD, SPOKANE,United States",
    citycode: "GEG",
    desc: "SFF - FELTS FIELD, SPOKANE,United States",
},{
    value: "GEG - SPOKANE INTL, SPOKANE,United States",
    citycode: "GEG",
    desc: "GEG - SPOKANE INTL, SPOKANE,United States",
},{
    value: "BNH - BARNES, HARTFORD,United States",
    citycode: "HFD",
    desc: "BNH - BARNES, HARTFORD,United States",
},{
    value: "BDL - BRADLEY INTL, HARTFORD,United States",
    citycode: "HFD",
    desc: "BDL - BRADLEY INTL, HARTFORD,United States",
},{
    value: "HFD - BRAINARD, HARTFORD,United States",
    citycode: "HFD",
    desc: "HFD - BRAINARD, HARTFORD,United States",
},{
    value: "HLR - FORT HOOD AAF, KILLEEN,United States",
    citycode: "ILE",
    desc: "HLR - FORT HOOD AAF, KILLEEN,United States",
},{
    value: "GRK - GRAY AAF, KILLEEN,United States",
    citycode: "ILE",
    desc: "GRK - GRAY AAF, KILLEEN,United States",
},{
    value: "ILE - KILLEEN MNPL, KILLEEN,United States",
    citycode: "ILE",
    desc: "ILE - KILLEEN MNPL, KILLEEN,United States",
},{
    value: "LYN - BRON, LYON,France",
    citycode: "LYS",
    desc: "LYN - BRON, LYON,France",
},{
    value: "GNB - GRENOBLE SAINT GEOIRS, LYON,France",
    citycode: "LYS",
    desc: "GNB - GRENOBLE SAINT GEOIRS, LYON,France",
},{
    value: "LYS - SAINT EXUPERY, LYON,France",
    citycode: "LYS",
    desc: "LYS - SAINT EXUPERY, LYON,France",
},{
    value: "MCN - LEWIS B WILSON, MACON,United States",
    citycode: "MCN",
    desc: "MCN - LEWIS B WILSON, MACON,United States",
},{
    value: "WRB - ROBINS AFB, MACON,United States",
    citycode: "MCN",
    desc: "WRB - ROBINS AFB, MACON,United States",
},{
    value: "MAC - SMART, MACON,United States",
    citycode: "MCN",
    desc: "MAC - SMART, MACON,United States",
},{
    value: "MGM - DANNELLY FLD, MONTGOMERY,United States",
    citycode: "MGM",
    desc: "MGM - DANNELLY FLD, MONTGOMERY,United States",
},{
    value: "GUN - GUNTER AFB, MONTGOMERY,United States",
    citycode: "MGM",
    desc: "GUN - GUNTER AFB, MONTGOMERY,United States",
},{
    value: "MXF - MAXWELL AFB, MONTGOMERY,United States",
    citycode: "MGM",
    desc: "MXF - MAXWELL AFB, MONTGOMERY,United States",
},{
    value: "GTN - GLENTANNER, MOUNT COOK,New Zealand",
    citycode: "MON",
    desc: "GTN - GLENTANNER, MOUNT COOK,New Zealand",
},{
    value: "MON - MOUNT COOK AIRPORT, MOUNT COOK,New Zealand",
    citycode: "MON",
    desc: "MON - MOUNT COOK AIRPORT, MOUNT COOK,New Zealand",
},{
    value: "TWZ - PUKAKI TWIZEL, MOUNT COOK,New Zealand",
    citycode: "MON",
    desc: "TWZ - PUKAKI TWIZEL, MOUNT COOK,New Zealand",
},{
    value: "MIC - CRYSTAL, MINNEAPOLIS,United States",
    citycode: "MSP",
    desc: "MIC - CRYSTAL, MINNEAPOLIS,United States",
},{
    value: "FCM - FLYING CLOUD, MINNEAPOLIS,United States",
    citycode: "MSP",
    desc: "FCM - FLYING CLOUD, MINNEAPOLIS,United States",
},{
    value: "MSP - SAINT PAUL INTL, MINNEAPOLIS,United States",
    citycode: "MSP",
    desc: "MSP - SAINT PAUL INTL, MINNEAPOLIS,United States",
},{
    value: "MSY - L ARMSTRONG INTL, NEW ORLEANS,United States",
    citycode: "MSY",
    desc: "MSY - L ARMSTRONG INTL, NEW ORLEANS,United States",
},{
    value: "NEW - LAKEFRONT, NEW ORLEANS,United States",
    citycode: "MSY",
    desc: "NEW - LAKEFRONT, NEW ORLEANS,United States",
},{
    value: "NBG - NAS, NEW ORLEANS,United States",
    citycode: "MSY",
    desc: "NBG - NAS, NEW ORLEANS,United States",
},{
    value: "KIX - KANSAI INTERNATIONAL, OSAKA,Japan",
    citycode: "OSA",
    desc: "KIX - KANSAI INTERNATIONAL, OSAKA,Japan",
},{
    value: "UKB - KOBE, OSAKA,Japan",
    citycode: "OSA",
    desc: "UKB - KOBE, OSAKA,Japan",
},{
    value: "ITM - OSAKA INTL  ITAMI, OSAKA,Japan",
    citycode: "OSA",
    desc: "ITM - OSAKA INTL  ITAMI, OSAKA,Japan",
},{
    value: "OSL - GARDERMOEN, OSLO,Norway",
    citycode: "OSL",
    desc: "OSL - GARDERMOEN, OSLO,Norway",
},{
    value: "RYG - MOSS RYGGE, OSLO,Norway",
    citycode: "OSL",
    desc: "RYG - MOSS RYGGE, OSLO,Norway",
},{
    value: "TRF - SANDEFJORD TORP, OSLO,Norway",
    citycode: "OSL",
    desc: "TRF - SANDEFJORD TORP, OSLO,Norway",
},{
    value: "PFN - BAY COUNTY, PANAMA CITY,United States",
    citycode: "PFN",
    desc: "PFN - BAY COUNTY, PANAMA CITY,United States",
},{
    value: "ECP - NW FLORIDA BEACHES INT, PANAMA CITY,United States",
    citycode: "PFN",
    desc: "ECP - NW FLORIDA BEACHES INT, PANAMA CITY,United States",
},{
    value: "PAM - TYNDALL AFB, PANAMA CITY,United States",
    citycode: "PFN",
    desc: "PAM - TYNDALL AFB, PANAMA CITY,United States",
},{
    value: "RIR - FLABOB, RIVERSIDE,United States",
    citycode: "RAL",
    desc: "RIR - FLABOB, RIVERSIDE,United States",
},{
    value: "RIV - MARCH JARB, RIVERSIDE,United States",
    citycode: "RAL",
    desc: "RIV - MARCH JARB, RIVERSIDE,United States",
},{
    value: "RAL - RIVERSIDE, RIVERSIDE,United States",
    citycode: "RAL",
    desc: "RAL - RIVERSIDE, RIVERSIDE,United States",
},{
    value: "GIG - GALEAO A.C JOBIM INTL, RIO DE JANEIRO,Brazil",
    citycode: "RIO",
    desc: "GIG - GALEAO A.C JOBIM INTL, RIO DE JANEIRO,Brazil",
},{
    value: "SNZ - SANTA CRUZ AB, RIO DE JANEIRO,Brazil",
    citycode: "RIO",
    desc: "SNZ - SANTA CRUZ AB, RIO DE JANEIRO,Brazil",
},{
    value: "SDU - SANTOS DUMONT, RIO DE JANEIRO,Brazil",
    citycode: "RIO",
    desc: "SDU - SANTOS DUMONT, RIO DE JANEIRO,Brazil",
},{
    value: "CGH - CONGONHAS, SAO PAULO,Brazil",
    citycode: "SAO",
    desc: "CGH - CONGONHAS, SAO PAULO,Brazil",
},{
    value: "GRU - GUARULHOS INTL, SAO PAULO,Brazil",
    citycode: "SAO",
    desc: "GRU - GUARULHOS INTL, SAO PAULO,Brazil",
},{
    value: "VCP - VIRACOPOS CAMPINAS INT, SAO PAULO,Brazil",
    citycode: "SAO",
    desc: "VCP - VIRACOPOS CAMPINAS INT, SAO PAULO,Brazil",
},{
    value: "LOU - BOWMAN FIELD, LOUISVILLE,United States",
    citycode: "SDF",
    desc: "LOU - BOWMAN FIELD, LOUISVILLE,United States",
},{
    value: "LJC - INTERCONT, LOUISVILLE,United States",
    citycode: "SDF",
    desc: "LJC - INTERCONT, LOUISVILLE,United States",
},{
    value: "SDF - LOUISVILLE INTL, LOUISVILLE,United States",
    citycode: "SDF",
    desc: "SDF - LOUISVILLE INTL, LOUISVILLE,United States",
},{
    value: "LWK - LERWICK, SHETLAND ISLANDS,United Kingdom",
    citycode: "SDZ",
    desc: "LWK - LERWICK, SHETLAND ISLANDS,United Kingdom",
},{
    value: "SCS - SCATSTA, SHETLAND ISLANDS,United Kingdom",
    citycode: "SDZ",
    desc: "SCS - SCATSTA, SHETLAND ISLANDS,United Kingdom",
},{
    value: "LSI - SUMBURGH, SHETLAND ISLANDS,United Kingdom",
    citycode: "SDZ",
    desc: "LSI - SUMBURGH, SHETLAND ISLANDS,United Kingdom",
},{
    value: "BFI - BOEING FLD KING CO INT, SEATTLE,United States",
    citycode: "SEA",
    desc: "BFI - BOEING FLD KING CO INT, SEATTLE,United States",
},{
    value: "LKE - LAKE UNION SPB, SEATTLE,United States",
    citycode: "SEA",
    desc: "LKE - LAKE UNION SPB, SEATTLE,United States",
},{
    value: "SEA - SEATTLE TACOMA INTL, SEATTLE,United States",
    citycode: "SEA",
    desc: "SEA - SEATTLE TACOMA INTL, SEATTLE,United States",
},{
    value: "BAD - BARKSDALE AFB, SHREVEPORT,United States",
    citycode: "SHV",
    desc: "BAD - BARKSDALE AFB, SHREVEPORT,United States",
},{
    value: "DTN - DOWNTOWN, SHREVEPORT,United States",
    citycode: "SHV",
    desc: "DTN - DOWNTOWN, SHREVEPORT,United States",
},{
    value: "SHV - REGIONAL, SHREVEPORT,United States",
    citycode: "SHV",
    desc: "SHV - REGIONAL, SHREVEPORT,United States",
},{
    value: "CPS - DOWNTOWN AIRPORT, SAINT LOUIS,United States",
    citycode: "STL",
    desc: "CPS - DOWNTOWN AIRPORT, SAINT LOUIS,United States",
},{
    value: "STL - LAMBERT, SAINT LOUIS,United States",
    citycode: "STL",
    desc: "STL - LAMBERT, SAINT LOUIS,United States",
},{
    value: "SUS - SPIRIT OF, SAINT LOUIS,United States",
    citycode: "STL",
    desc: "SUS - SPIRIT OF, SAINT LOUIS,United States",
},{
    value: "GRF - GRAY AAF, TACOMA,United States",
    citycode: "TIW",
    desc: "GRF - GRAY AAF, TACOMA,United States",
},{
    value: "TCM - MCCHORD FIELD, TACOMA,United States",
    citycode: "TIW",
    desc: "TCM - MCCHORD FIELD, TACOMA,United States",
},{
    value: "TIW - TACOMA NARROWS, TACOMA,United States",
    citycode: "TIW",
    desc: "TIW - TACOMA NARROWS, TACOMA,United States",
},{
    value: "EIS - BEEF ISLAND, TORTOLA,British Virgin Islands",
    citycode: "TOV",
    desc: "EIS - BEEF ISLAND, TORTOLA,British Virgin Islands",
},{
    value: "RAD - ROAD TOWN SPB, TORTOLA,British Virgin Islands",
    citycode: "TOV",
    desc: "RAD - ROAD TOWN SPB, TORTOLA,British Virgin Islands",
},{
    value: "TOV - WEST END SPB, TORTOLA,British Virgin Islands",
    citycode: "TOV",
    desc: "TOV - WEST END SPB, TORTOLA,British Virgin Islands",
},{
    value: "DMA - DAVIS MONTHAN AFB, TUCSON,United States",
    citycode: "TUS",
    desc: "DMA - DAVIS MONTHAN AFB, TUCSON,United States",
},{
    value: "AVW - MARANA REGIONAL, TUCSON,United States",
    citycode: "TUS",
    desc: "AVW - MARANA REGIONAL, TUCSON,United States",
},{
    value: "TUS - TUCSON INTL, TUCSON,United States",
    citycode: "TUS",
    desc: "TUS - TUCSON INTL, TUCSON,United States",
},{
    value: "NRT - NARITA INTL, TOKYO,Japan",
    citycode: "TYO",
    desc: "NRT - NARITA INTL, TOKYO,Japan",
},{
    value: "HND - TOKYO INTL HANEDA, TOKYO,Japan",
    citycode: "TYO",
    desc: "HND - TOKYO INTL HANEDA, TOKYO,Japan",
},{
    value: "OKO - YOKOTA AB, TOKYO,Japan",
    citycode: "TYO",
    desc: "OKO - YOKOTA AB, TOKYO,Japan",
},{
    value: "CBM - COLUMBUS AFB, COLUMBUS,United States",
    citycode: "UBS",
    desc: "CBM - COLUMBUS AFB, COLUMBUS,United States",
},{
    value: "GTR - GOLDEN TRIANGLE, COLUMBUS,United States",
    citycode: "UBS",
    desc: "GTR - GOLDEN TRIANGLE, COLUMBUS,United States",
},{
    value: "WBU - BOULDER MNPL, BOULDER,United States",
    citycode: "WBU",
    desc: "WBU - BOULDER MNPL, BOULDER,United States",
},{
    value: "WBI - BROKER INN, BOULDER,United States",
    citycode: "WBU",
    desc: "WBI - BROKER INN, BOULDER,United States",
},{
    value: "WHH - HILTON HAR H, BOULDER,United States",
    citycode: "WBU",
    desc: "WHH - HILTON HAR H, BOULDER,United States",
},{
    value: "YED - CFB NAMAO HELIPORT, EDMONTON,Canada",
    citycode: "YEA",
    desc: "YED - CFB NAMAO HELIPORT, EDMONTON,Canada",
},{
    value: "YXD - CITY CENTER AIRPORT, EDMONTON,Canada",
    citycode: "YEA",
    desc: "YXD - CITY CENTER AIRPORT, EDMONTON,Canada",
},{
    value: "YEG - EDMONTON INTL, EDMONTON,Canada",
    citycode: "YEA",
    desc: "YEG - EDMONTON INTL, EDMONTON,Canada",
},{
    value: "YMX - MIRABEL INTL, MONTREAL,Canada",
    citycode: "YMQ",
    desc: "YMX - MIRABEL INTL, MONTREAL,Canada",
},{
    value: "YUL - PIERRE E. TRUDEAU INTL, MONTREAL,Canada",
    citycode: "YMQ",
    desc: "YUL - PIERRE E. TRUDEAU INTL, MONTREAL,Canada",
},{
    value: "YHU - ST-HUBERT, MONTREAL,Canada",
    citycode: "YMQ",
    desc: "YHU - ST-HUBERT, MONTREAL,Canada",
},{
    value: "YND - GATINEAU, OTTAWA,Canada",
    citycode: "YOW",
    desc: "YND - GATINEAU, OTTAWA,Canada",
},{
    value: "YOW - MACDONALD CARTIER INTL, OTTAWA,Canada",
    citycode: "YOW",
    desc: "YOW - MACDONALD CARTIER INTL, OTTAWA,Canada",
},{
    value: "YRO - ROCKCLIFFE, OTTAWA,Canada",
    citycode: "YOW",
    desc: "YRO - ROCKCLIFFE, OTTAWA,Canada",
},{
    value: "YDT - BOUNDARY BAY, VANCOUVER,Canada",
    citycode: "YVR",
    desc: "YDT - BOUNDARY BAY, VANCOUVER,Canada",
},{
    value: "CXH - HARBOUR SPB, VANCOUVER,Canada",
    citycode: "YVR",
    desc: "CXH - HARBOUR SPB, VANCOUVER,Canada",
},{
    value: "YVR - INTERNATIONAL, VANCOUVER,Canada",
    citycode: "YVR",
    desc: "YVR - INTERNATIONAL, VANCOUVER,Canada",
},{
    value: "AAR - AIRPORT, AARHUS,Denmark",
    citycode: "AAR",
    desc: "AAR - AIRPORT, AARHUS,Denmark",
},{
    value: "ZBU - LIMOUSINE, AARHUS,Denmark",
    citycode: "AAR",
    desc: "ZBU - LIMOUSINE, AARHUS,Denmark",
},{
    value: "DYS - DYESS AFB, ABILENE,United States",
    citycode: "ABI",
    desc: "DYS - DYESS AFB, ABILENE,United States",
},{
    value: "ABI - REGIONAL, ABILENE,United States",
    citycode: "ABI",
    desc: "ABI - REGIONAL, ABILENE,United States",
},{
    value: "NAB - ALBANY NAS, ALBANY,United States",
    citycode: "ABY",
    desc: "NAB - ALBANY NAS, ALBANY,United States",
},{
    value: "ABY - DOUGHERTY COUNTY, ALBANY,United States",
    citycode: "ABY",
    desc: "ABY - DOUGHERTY COUNTY, ALBANY,United States",
},{
    value: "CNW - JAMES CONNALL, WACO,United States",
    citycode: "ACT",
    desc: "CNW - JAMES CONNALL, WACO,United States",
},{
    value: "ACT - WACO MNPL, WACO,United States",
    citycode: "ACT",
    desc: "ACT - WACO MNPL, WACO,United States",
},{
    value: "ACV - ARCATA APT, ARCATA EUREKA,United States",
    citycode: "ACV",
    desc: "ACV - ARCATA APT, ARCATA EUREKA,United States",
},{
    value: "EKA - EUREKA MURRAY FIELD, ARCATA EUREKA,United States",
    citycode: "ACV",
    desc: "EKA - EUREKA MURRAY FIELD, ARCATA EUREKA,United States",
},{
    value: "MHP - MINSK 1, MINSK,Belarus",
    citycode: "MSQ",
    desc: "MHP - MINSK 1, MINSK,Belarus",
},{
    value: "MSQ - MINSK 2 INTERNATIONAL, MINSK,Belarus",
    citycode: "MSQ",
    desc: "MSQ - MINSK 2 INTERNATIONAL, MINSK,Belarus",
},{
    value: "NFB - DETROIT NAF, MOUNT CLEMENS,United States",
    citycode: "MTC",
    desc: "NFB - DETROIT NAF, MOUNT CLEMENS,United States",
},{
    value: "MTC - SELFRIDGE ANG, MOUNT CLEMENS,United States",
    citycode: "MTC",
    desc: "MTC - SELFRIDGE ANG, MOUNT CLEMENS,United States",
},{
    value: "SHO - KING MSWATI III INTL, MANZINI,Swaziland",
    citycode: "MTS",
    desc: "SHO - KING MSWATI III INTL, MANZINI,Swaziland",
},{
    value: "MTS - MATSAPHA INTL, MANZINI,Swaziland",
    citycode: "MTS",
    desc: "MTS - MATSAPHA INTL, MANZINI,Swaziland",
},{
    value: "NTR - DEL NORTE INTL, MONTERREY,Mexico",
    citycode: "MTY",
    desc: "NTR - DEL NORTE INTL, MONTERREY,Mexico",
},{
    value: "MTY - MARIANO ESCOBEDO INTL, MONTERREY,Mexico",
    citycode: "MTY",
    desc: "MTY - MARIANO ESCOBEDO INTL, MONTERREY,Mexico",
},{
    value: "AGB - AUGSBURGL, MUNICH,Germany",
    citycode: "MUC",
    desc: "AGB - AUGSBURGL, MUNICH,Germany",
},{
    value: "MUC - MUNICH INTERNATIONAL, MUNICH,Germany",
    citycode: "MUC",
    desc: "MUC - MUNICH INTERNATIONAL, MUNICH,Germany",
},{
    value: "MWH - GRANT COUNTY INTL, MOSES LAKE,United States",
    citycode: "MWH",
    desc: "MWH - GRANT COUNTY INTL, MOSES LAKE,United States",
},{
    value: "LRN - LARSON AFB, MOSES LAKE,United States",
    citycode: "MWH",
    desc: "LRN - LARSON AFB, MOSES LAKE,United States",
},{
    value: "CWO - FORT WOLTER, MINERAL WELLS,United States",
    citycode: "MWL",
    desc: "CWO - FORT WOLTER, MINERAL WELLS,United States",
},{
    value: "MWL - MINERAL WELLS ARP, MINERAL WELLS,United States",
    citycode: "MWL",
    desc: "MWL - MINERAL WELLS ARP, MINERAL WELLS,United States",
},{
    value: "CRE - GRD STRAND, MYRTLE BEACH,United States",
    citycode: "MYR",
    desc: "CRE - GRD STRAND, MYRTLE BEACH,United States",
},{
    value: "MYR - MYRTLE AFB, MYRTLE BEACH,United States",
    citycode: "MYR",
    desc: "MYR - MYRTLE AFB, MYRTLE BEACH,United States",
},{
    value: "BAB - BEALE AFB, MARYSVILLE,United States",
    citycode: "MYV",
    desc: "BAB - BEALE AFB, MARYSVILLE,United States",
},{
    value: "MYV - YUBA COUNTY, MARYSVILLE,United States",
    citycode: "MYV",
    desc: "MYV - YUBA COUNTY, MARYSVILLE,United States",
},{
    value: "NSA - AUGUSTO SEVERO, NATAL,Brazil",
    citycode: "NAT",
    desc: "NSA - AUGUSTO SEVERO, NATAL,Brazil",
},{
    value: "NAT - INTERNATIONAL, NATAL,Brazil",
    citycode: "NAT",
    desc: "NAT - INTERNATIONAL, NATAL,Brazil",
},{
    value: "NBO - JOMO KENYATTA INTL, NAIROBI,Kenya",
    citycode: "NBO",
    desc: "NBO - JOMO KENYATTA INTL, NAIROBI,Kenya",
},{
    value: "WIL - WILSON, NAIROBI,Kenya",
    citycode: "NBO",
    desc: "WIL - WILSON, NAIROBI,Kenya",
},{
    value: "FLX - FALLON MNPL, FALLON,United States",
    citycode: "NFL",
    desc: "FLX - FALLON MNPL, FALLON,United States",
},{
    value: "NFL - NAS VAN VOORHIS FIELD, FALLON,United States",
    citycode: "NFL",
    desc: "NFL - NAS VAN VOORHIS FIELD, FALLON,United States",
},{
    value: "NGO - CHUBU CENTRAIR INTL, NAGOYA,Japan",
    citycode: "NGO",
    desc: "NGO - CHUBU CENTRAIR INTL, NAGOYA,Japan",
},{
    value: "NKM - NAGOYA KOMAKI, NAGOYA,Japan",
    citycode: "NGO",
    desc: "NKM - NAGOYA KOMAKI, NAGOYA,Japan",
},{
    value: "NGS - NAGASAKI AIRPORT, NAGASAKI,Japan",
    citycode: "NGS",
    desc: "NGS - NAGASAKI AIRPORT, NAGASAKI,Japan",
},{
    value: "OMJ - OMURA, NAGASAKI,Japan",
    citycode: "NGS",
    desc: "OMJ - OMURA, NAGASAKI,Japan",
},{
    value: "NHA - AIR BASE, NHA TRANG,Vietnam",
    citycode: "NHA",
    desc: "NHA - AIR BASE, NHA TRANG,Vietnam",
},{
    value: "CXR - CAM RANH INTL, NHA TRANG,Vietnam",
    citycode: "NHA",
    desc: "CXR - CAM RANH INTL, NHA TRANG,Vietnam",
},{
    value: "MQP - KRUGER MPUMALANGA INTL, NELSPRUIT,South Africa",
    citycode: "NLP",
    desc: "MQP - KRUGER MPUMALANGA INTL, NELSPRUIT,South Africa",
},{
    value: "NLP - NELSPRUIT AIRPORT, NELSPRUIT,South Africa",
    citycode: "NLP",
    desc: "NLP - NELSPRUIT AIRPORT, NELSPRUIT,South Africa",
},{
    value: "NOU - LA TONTOUTA, NOUMEA,New Caledonia",
    citycode: "NOU",
    desc: "NOU - LA TONTOUTA, NOUMEA,New Caledonia",
},{
    value: "GEA - MAGENTA, NOUMEA,New Caledonia",
    citycode: "NOU",
    desc: "GEA - MAGENTA, NOUMEA,New Caledonia",
},{
    value: "EMA - EAST MIDLANDS, NOTTINGHAM,United Kingdom",
    citycode: "NQT",
    desc: "EMA - EAST MIDLANDS, NOTTINGHAM,United Kingdom",
},{
    value: "NQT - NOTTIMGHAM AIRPORT, NOTTINGHAM,United Kingdom",
    citycode: "NQT",
    desc: "NQT - NOTTIMGHAM AIRPORT, NOTTINGHAM,United Kingdom",
},{
    value: "BEO - AEROPELICAN, NEWCASTLE,Australia",
    citycode: "NTL",
    desc: "BEO - AEROPELICAN, NEWCASTLE,Australia",
},{
    value: "NTL - WILLIAMTOWN, NEWCASTLE,Australia",
    citycode: "NTL",
    desc: "NTL - WILLIAMTOWN, NEWCASTLE,Australia",
},{
    value: "LFK - LUFKIN ANGEL, NACOGDOCHES,United States",
    citycode: "OCH",
    desc: "LFK - LUFKIN ANGEL, NACOGDOCHES,United States",
},{
    value: "OCH - NACOGDOCHES, NACOGDOCHES,United States",
    citycode: "OCH",
    desc: "OCH - NACOGDOCHES, NACOGDOCHES,United States",
},{
    value: "HIF - HILL AFB, OGDEN,United States",
    citycode: "OGD",
    desc: "HIF - HILL AFB, OGDEN,United States",
},{
    value: "OGD - HINCKLEY, OGDEN,United States",
    citycode: "OGD",
    desc: "OGD - HINCKLEY, OGDEN,United States",
},{
    value: "DNA - KADENA AB, OKINAWA,Japan",
    citycode: "OKA",
    desc: "DNA - KADENA AB, OKINAWA,Japan",
},{
    value: "OKA - NAHA, OKINAWA,Japan",
    citycode: "OKA",
    desc: "OKA - NAHA, OKINAWA,Japan",
},{
    value: "OMA - EPPLEY AIRFIELD, OMAHA,United States",
    citycode: "OMA",
    desc: "OMA - EPPLEY AIRFIELD, OMAHA,United States",
},{
    value: "MIQ - MILLARD, OMAHA,United States",
    citycode: "OMA",
    desc: "MIQ - MILLARD, OMAHA,United States",
},{
    value: "NGU - NAS CHAMBERS, NORFOLK,United States",
    citycode: "ORF",
    desc: "NGU - NAS CHAMBERS, NORFOLK,United States",
},{
    value: "ORF - NORFOLK INTL, NORFOLK,United States",
    citycode: "ORF",
    desc: "ORF - NORFOLK INTL, NORFOLK,United States",
},{
    value: "ORN - AHMED BEN BELLA, ORAN,Algeria",
    citycode: "ORN",
    desc: "ORN - AHMED BEN BELLA, ORAN,Algeria",
},{
    value: "TAF - TAFARAOUI, ORAN,Algeria",
    citycode: "ORN",
    desc: "TAF - TAFARAOUI, ORAN,Algeria",
},{
    value: "OXF - LONDON OXFORD, OXFORD,United Kingdom",
    citycode: "OXF",
    desc: "OXF - LONDON OXFORD, OXFORD,United Kingdom",
},{
    value: "OXQ - RAILWAY STATION, OXFORD,United Kingdom",
    citycode: "OXF",
    desc: "OXQ - RAILWAY STATION, OXFORD,United Kingdom",
},{
    value: "LNA - COUNTY, WEST PALM BEACH,United States",
    citycode: "PBI",
    desc: "LNA - COUNTY, WEST PALM BEACH,United States",
},{
    value: "PBI - PBEACH I, WEST PALM BEACH,United States",
    citycode: "PBI",
    desc: "PBI - PBEACH I, WEST PALM BEACH,United States",
},{
    value: "PBM - JOHAN A PENGEL INTL, PARAMARIBO,Suriname",
    citycode: "PBM",
    desc: "PBM - JOHAN A PENGEL INTL, PARAMARIBO,Suriname",
},{
    value: "ORG - ZORG EN HOOP, PARAMARIBO,Suriname",
    citycode: "PBM",
    desc: "ORG - ZORG EN HOOP, PARAMARIBO,Suriname",
},{
    value: "BWH - BUTTERWORTH, PENANG,Malaysia",
    citycode: "PEN",
    desc: "BWH - BUTTERWORTH, PENANG,Malaysia",
},{
    value: "PEN - PENANG INTL, PENANG,Malaysia",
    citycode: "PEN",
    desc: "PEN - PENANG INTL, PENANG,Malaysia",
},{
    value: "JAD - JANDAKOT, PERTH,Australia",
    citycode: "PER",
    desc: "JAD - JANDAKOT, PERTH,Australia",
},{
    value: "PER - PERTH, PERTH,Australia",
    citycode: "PER",
    desc: "PER - PERTH, PERTH,Australia",
},{
    value: "PHG - PORT HARCOURT CITY APT, PORT HARCOURT,Nigeria",
    citycode: "PHC",
    desc: "PHG - PORT HARCOURT CITY APT, PORT HARCOURT,Nigeria",
},{
    value: "PHC - PORT HARCOURT INTL, PORT HARCOURT,Nigeria",
    citycode: "PHC",
    desc: "PHC - PORT HARCOURT INTL, PORT HARCOURT,Nigeria",
},{
    value: "LFI - LANGLEY AFB, NEWPORT NEWS HAMPTON,United States",
    citycode: "PHF",
    desc: "LFI - LANGLEY AFB, NEWPORT NEWS HAMPTON,United States",
},{
    value: "PHF - NEWPORT NEWS HAMPTON,United States",
    citycode: "PHF",
    desc: "PHF - NEWPORT NEWS HAMPTON,United States",
},{
    value: "PIP - PILOT POINT AIRPORT,United States",
    citycode: "PIP",
    desc: "PIP - PILOT POINT AIRPORT,United States",
},{
    value: "UGB - UGASHIK BAY, PILOT POINT,United States",
    citycode: "PIP",
    desc: "UGB - UGASHIK BAY, PILOT POINT,United States",
},{
    value: "AGC - ALLEGHENY COU, PITTSBURGH,United States",
    citycode: "PIT",
    desc: "AGC - ALLEGHENY COU, PITTSBURGH,United States",
},{
    value: "PIT - INTERNATIONAL, PITTSBURGH,United States",
    citycode: "PIT",
    desc: "PIT - INTERNATIONAL, PITTSBURGH,United States",
},{
    value: "PRG - RUZYNE, PRAGUE,Czech Republic",
    citycode: "PRG",
    desc: "PRG - RUZYNE, PRAGUE,Czech Republic",
},{
    value: "VOD - VODOCHODY, PRAGUE,Czech Republic",
    citycode: "PRG",
    desc: "VOD - VODOCHODY, PRAGUE,Czech Republic",
},{
    value: "WKF - WATERKLOOF AFB, PRETORIA,South Africa",
    citycode: "PRY",
    desc: "WKF - WATERKLOOF AFB, PRETORIA,South Africa",
},{
    value: "PRY - WONDERBOOM, PRETORIA,South Africa",
    citycode: "PRY",
    desc: "PRY - WONDERBOOM, PRETORIA,South Africa",
},{
    value: "UDD - BERMUDA, PALM SPRINGS,United States",
    citycode: "PSP",
    desc: "UDD - BERMUDA, PALM SPRINGS,United States",
},{
    value: "PSP - INTERNATIONAL, PALM SPRINGS,United States",
    citycode: "PSP",
    desc: "PSP - INTERNATIONAL, PALM SPRINGS,United States",
},{
    value: "FLE - FORT LEE AAF,PETERSBURG,United States",
    citycode: "PTB",
    desc: "FLE - FORT LEE AAF,PETERSBURG,United States",
},{
    value: "PTB - PETERSBURG MNPL,PETERSBURG,United States",
    citycode: "PTB",
    desc: "PTB - PETERSBURG MNPL,PETERSBURG,United States",
},{
    value: "PAC - MARCOS A GELABERT INTL, PANAMA CITY,Panama",
    citycode: "PTY",
    desc: "PAC - MARCOS A GELABERT INTL, PANAMA CITY,Panama",
},{
    value: "PTY - TOCUMEN INTL, PANAMA CITY,Panama",
    citycode: "PTY",
    desc: "PTY - TOCUMEN INTL, PANAMA CITY,Panama",
},{
    value: "RCA - ELLSWORTH AFB, RAPID CIT,United States",
    citycode: "RAP",
    desc: "RCA - ELLSWORTH AFB, RAPID CIT,United States",
},{
    value: "RAP - REGIONAL, RAPID CIT,United States",
    citycode: "RAP",
    desc: "RAP - REGIONAL, RAPID CIT,United States",
},{
    value: "BZF - BENTON FIELD, REDDING,United States",
    citycode: "RDD",
    desc: "BZF - BENTON FIELD, REDDING,United States",
},{
    value: "RDD - MUNICIPAL, REDDING,United States",
    citycode: "RDD",
    desc: "RDD - MUNICIPAL, REDDING,United States",
},{
    value: "KEF - KEFLAVIK INTL, REYKJAVIK,Iceland",
    citycode: "REK",
    desc: "KEF - KEFLAVIK INTL, REYKJAVIK,Iceland",
},{
    value: "RKV - REYKJAVIK DOM, REYKJAVIK,Iceland",
    citycode: "REK",
    desc: "RKV - REYKJAVIK DOM, REYKJAVIK,Iceland",
},{
    value: "RFG - ROOKE FIELD, REFUGIO,United States",
    citycode: "RFG",
    desc: "RFG - ROOKE FIELD, REFUGIO,United States",
},{
    value: "VDU - TOM O CONNOR, REFUGIO,United States",
    citycode: "RFG",
    desc: "VDU - TOM O CONNOR, REFUGIO,United States",
},{
    value: "RIX - RIGA INTL, RIGA,Latvia",
    citycode: "RIX",
    desc: "RIX - RIGA INTL, RIGA,Latvia",
},{
    value: "RSC - SKULTE, RIGA,Latvia",
    citycode: "RIX",
    desc: "RSC - SKULTE, RIGA,Latvia",
},{
    value: "RHR - AL HAMRA SPB, RAS AL KHAIMAH,United Arab Emirates",
    citycode: "RKT",
    desc: "RHR - AL HAMRA SPB, RAS AL KHAIMAH,United Arab Emirates",
},{
    value: "RKT - INTERNATIONAL, RAS AL KHAIMAH,United Arab Emirates",
    citycode: "RKT",
    desc: "RKT - INTERNATIONAL, RAS AL KHAIMAH,United Arab Emirates",
},{
    value: "RMQ - CINGCYUANGANG, TAICHUNG,Taiwan",
    citycode: "RMQ",
    desc: "RMQ - CINGCYUANGANG, TAICHUNG,Taiwan",
},{
    value: "TXG - SHUINAN, TAICHUNG,Taiwan",
    citycode: "RMQ",
    desc: "TXG - SHUINAN, TAICHUNG,Taiwan",
},{
    value: "CIA - CIAMPINO, ROME,Italy",
    citycode: "ROM",
    desc: "CIA - CIAMPINO, ROME,Italy",
},{
    value: "FCO - FIUMICINO, ROME,Italy",
    citycode: "ROM",
    desc: "FCO - FIUMICINO, ROME,Italy",
},{
    value: "JEK - JEKI, LOWER ZAMBEZI NAT PARK,Zambia",
    citycode: "RYL",
    desc: "JEK - JEKI, LOWER ZAMBEZI NAT PARK,Zambia",
},{
    value: "RYL - ROYAL, LOWER ZAMBEZI NAT PARK,Zambia",
    citycode: "RYL",
    desc: "RYL - ROYAL, LOWER ZAMBEZI NAT PARK,Zambia",
},{
    value: "SVN - HUNTER AAF, SAVANNAH,United States",
    citycode: "SAV",
    desc: "SVN - HUNTER AAF, SAVANNAH,United States",
},{
    value: "SAV - SAVANNAH/HILTON HEAD, SAVANNAH,United States",
    citycode: "SAV",
    desc: "SVN - HUNTER AAF, SAVANNAH,United States",
},{
    value: "SZN - SANTA CRUZ ISLAND, SANTA BARBARA,United States",
    citycode: "SBA",
    desc: "SZN - SANTA CRUZ ISLAND, SANTA BARBARA,United States",
},{
    value: "SBA - SAINT BA MNPL, SANTA BARBARA,United States",
    citycode: "SBA",
    desc: "SBA - SAINT BA MNPL, SANTA BARBARA,United States",
},{
    value: "SBD - INTERNATIONAL, SAN BERNARDINO,United States",
    citycode: "SBT",
    desc: "SBD - INTERNATIONAL, SAN BERNARDINO,United States",
},{
    value: "SBT - TRI CITY, SAN BERNARDINO,United States",
    citycode: "SBT",
    desc: "SBT - TRI CITY, SAN BERNARDINO,United States",
},{
    value: "SCN - SAARBRUECKEN AIRPORT, SAARBRUECKEN,Germany",
    citycode: "SCN",
    desc: "SCN - SAARBRUECKEN AIRPORT, SAARBRUECKEN,Germany",
},{
    value: "ZQW - ZWEIBRUECKEN, SAARBRUECKEN,Germany",
    citycode: "SCN",
    desc: "ZQW - ZWEIBRUECKEN, SAARBRUECKEN,Germany",
},{
    value: "JBQ - DR JOAQUIN BALAGUER, SANTO DOMINGO,Dominican Republic",
    citycode: "SDQ",
    desc: "JBQ - DR JOAQUIN BALAGUER, SANTO DOMINGO,Dominican Republic",
},{
    value: "SDQ - LAS AMERICAS INTL, SANTO DOMINGO,Dominican Republic",
    citycode: "SDQ",
    desc: "SDQ - LAS AMERICAS INTL, SANTO DOMINGO,Dominican Republic",
},{
    value: "SEM - CRAIG AFB, SELMA,United States",
    citycode: "SES",
    desc: "SEM - CRAIG AFB, SELMA,United States",
},{
    value: "SES - SELFIELD, SELMA,United States",
    citycode: "SES",
    desc: "SES - SELFIELD, SELMA,United States",
},{
    value: "SFG - GRAND CASE L ESPERANCE, SAINT MARTIN,Guadeloupe",
    citycode: "SFG",
    desc: "SFG - GRAND CASE L ESPERANCE, SAINT MARTIN,Guadeloupe",
},{
    value: "MSB - MARIGOT SPB, SAINT MARTIN,Guadeloupe",
    citycode: "SFG",
    desc: "MSB - MARIGOT SPB, SAINT MARTIN,Guadeloupe",
},{
    value: "EMB - EMBARKADER, SAN FRANCISCO,United States",
    citycode: "SFO",
    desc: "EMB - EMBARKADER, SAN FRANCISCO,United States",
},{
    value: "SFO - SAN FRANCISCO INTL, SAN FRANCISCO,United States",
    citycode: "SFO",
    desc: "SFO - SAN FRANCISCO INTL, SAN FRANCISCO,United States",
},{
    value: "GNY - GUNEY ANADOLU, SANLIURFA,Turkey",
    citycode: "SFQ",
    desc: "GNY - GUNEY ANADOLU, SANLIURFA,Turkey",
},{
    value: "SFQ - SANLIURFA AIRPORT, SANLIURFA,Turkey",
    citycode: "SFQ",
    desc: "SFQ - SANLIURFA AIRPORT, SANLIURFA,Turkey",
},{
    value: "SFY - SPRINGFIELD, SPRINGFIELD,United States",
    citycode: "SFY",
    desc: "SFY - SPRINGFIELD, SPRINGFIELD,United States",
},{
    value: "CEF - WESTOVER METRO, SPRINGFIELD,United States",
    citycode: "SFY",
    desc: "CEF - WESTOVER METRO, SPRINGFIELD,United States",
},{
    value: "BHW - BHAGATANWALA, SARGODHA,Pakistan",
    citycode: "SGI",
    desc: "BHW - BHAGATANWALA, SARGODHA,Pakistan",
},{
    value: "SGI - MUSHAF AB, SARGODHA,Pakistan",
    citycode: "SGI",
    desc: "SGI - MUSHAF AB, SARGODHA,Pakistan",
},{
    value: "SHA - HONGQIAO INTL, SHANGHAI,China",
    citycode: "SHA",
    desc: "SHA - HONGQIAO INTL, SHANGHAI,China",
},{
    value: "PVG - PUDONG INTL, SHANGHAI,China",
    citycode: "SHA",
    desc: "PVG - PUDONG INTL, SHANGHAI,China",
},{
    value: "XIY - XIANYANG INTL, XI AN,China",
    citycode: "SIA",
    desc: "XIY - XIANYANG INTL, XI AN,China",
},{
    value: "SIA - XIGUAN, XI AN,China",
    citycode: "SIA",
    desc: "SIA - XIGUAN, XI AN,China",
},{
    value: "ROF - ROHRER FIELD, MONTAGUE YREKA,United States",
    citycode: "SIY",
    desc: "ROF - ROHRER FIELD, MONTAGUE YREKA,United States",
},{
    value: "SIY - SISKIYOU COUNTY, MONTAGUE YREKA,United States",
    citycode: "SIY",
    desc: "SIY - SISKIYOU COUNTY, MONTAGUE YREKA,United States",
},{
    value: "RHV - REID HILLVIEW, SAN JOSE,United States",
    citycode: "SJC",
    desc: "RHV - REID HILLVIEW, SAN JOSE,United States",
},{
    value: "SJC - SAN JOSE MNPL, SAN JOSE,United States",
    citycode: "SJC",
    desc: "SJC - SAN JOSE MNPL, SAN JOSE,United States",
},{
    value: "SJO - JUAN SANTAMARIA, SAN JOSE,Costa Rica",
    citycode: "SJO",
    desc: "SJO - JUAN SANTAMARIA, SAN JOSE,Costa Rica",
},{
    value: "SYQ - TOBIAS BOLANOS INTL, SAN JOSE,Costa Rica",
    citycode: "SJO",
    desc: "SYQ - TOBIAS BOLANOS INTL, SAN JOSE,Costa Rica",
},{
    value: "GOF - GOODFELLOW AF, SAN ANGELO,United States",
    citycode: "SJT",
    desc: "GOF - GOODFELLOW AF, SAN ANGELO,United States",
},{
    value: "SJT - MATHIS FIELD, SAN ANGELO,United States",
    citycode: "SJT",
    desc: "SJT - MATHIS FIELD, SAN ANGELO,United States",
},{
    value: "SIG - F.L. RIBAS DOMINICCI,SAN JUAN,Puerto Rico",
    citycode: "SJU",
    desc: "SIG - F.L. RIBAS DOMINICCI,SAN JUAN,Puerto Rico",
},{
    value: "SJU - LUIS MUNOZ MARIN,SAN JUAN,Puerto Rico",
    citycode: "SJU",
    desc: "SJU - LUIS MUNOZ MARIN,SAN JUAN,Puerto Rico",
},{
    value: "SLU - GEORGE F.L.CHARLES, SAINT LUCIA,Saint Lucia",
    citycode: "SLU",
    desc: "SLU - GEORGE F.L.CHARLES, SAINT LUCIA,Saint Lucia",
},{
    value: "UVF - HEWANORRA INTL, SAINT LUCIA,Saint Lucia",
    citycode: "SLU",
    desc: "UVF - HEWANORRA INTL, SAINT LUCIA,Saint Lucia",
},{
    value: "CTS - NEW CHITOSE, SAPPORO,Japan",
    citycode: "SPK",
    desc: "CTS - NEW CHITOSE, SAPPORO,Japan",
},{
    value: "OKD - OKADAMA, SAPPORO,Japan",
    citycode: "SPK",
    desc: "OKD - OKADAMA, SAPPORO,Japan",
},{
    value: "KIP - KICKAPOO, WICHITA FALLS,United States",
    citycode: "SPS",
    desc: "KIP - KICKAPOO, WICHITA FALLS,United States",
},{
    value: "SPS - SHEPPARD, WICHITA FALLS,United States",
    citycode: "SPS",
    desc: "SPS - SHEPPARD, WICHITA FALLS,United States",
},{
    value: "SRZ - EL TROMPILLO, SANTA CRUZ,Bolivia",
    citycode: "SRZ",
    desc: "SRZ - EL TROMPILLO, SANTA CRUZ,Bolivia",
},{
    value: "VVI - VIRU VIRU INTL, SANTA CRUZ,Bolivia",
    citycode: "SRZ",
    desc: "VVI - VIRU VIRU INTL, SANTA CRUZ,Bolivia",
},{
    value: "SSC - SHAW AFB, SUMTER,United States",
    citycode: "SSC",
    desc: "SSC - SHAW AFB, SUMTER,United States",
},{
    value: "SUM - SUMTER MNPL, SUMTER,United States",
    citycode: "SSC",
    desc: "SUM - SUMTER MNPL, SUMTER,United States",
},{
    value: "BQK - GLYNCO JETPORT, BRUNSWICK,United States",
    citycode: "SSI",
    desc: "BQK - GLYNCO JETPORT, BRUNSWICK,United States",
},{
    value: "SSI - MCKINNON, BRUNSWICK,United States",
    citycode: "SSI",
    desc: "SSI - MCKINNON, BRUNSWICK,United States",
},{
    value: "CIU - CHIPPEWA, SAULT STE MARIE,United States",
    citycode: "SSM",
    desc: "CIU - CHIPPEWA, SAULT STE MARIE,United States",
},{
    value: "INR - KINCHELO, SAULT STE MARIE,United States",
    citycode: "SSM",
    desc: "INR - KINCHELO, SAULT STE MARIE,United States",
},{
    value: "SPB - CHARLOTTE AMALIE SPB, SAINT THOMAS ISLAND,Virgin Islands",
    citycode: "STT",
    desc: "SPB - CHARLOTTE AMALIE SPB, SAINT THOMAS ISLAND,Virgin Islands",
},{
    value: "STT - CYRIL E. KING, SAINT THOMAS ISLAND,Virgin Islands",
    citycode: "STT",
    desc: "STT - CYRIL E. KING, SAINT THOMAS ISLAND,Virgin Islands",
},{
    value: "SSB - CHRISTIANSTED SPB, SAINT CROIX ISLAND,Virgin Islands",
    citycode: "STX",
    desc: "SSB - CHRISTIANSTED SPB, SAINT CROIX ISLAND,Virgin Islands",
},{
    value: "STX - HENRY E ROHLSEN, SAINT CROIX ISLAND,Virgin Islands",
    citycode: "STX",
    desc: "STX - HENRY E ROHLSEN, SAINT CROIX ISLAND,Virgin Islands",
},{
    value: "SWQ - BRANGBIJI, SUMBAWA,Indonesia",
    citycode: "SWQ",
    desc: "SWQ - BRANGBIJI, SUMBAWA,Indonesia",
},{
    value: "LYK - LUNYUK, SUMBAWA,Indonesia",
    citycode: "SWQ",
    desc: "LYK - LUNYUK, SUMBAWA,Indonesia",
},{
    value: "TFN - TENERIFE NORTE, TENERIFE,Spain",
    citycode: "TCI",
    desc: "TFN - TENERIFE NORTE, TENERIFE,Spain",
},{
    value: "TFS - TENERIFE SUR, TENERIFE,Spain",
    citycode: "TCI",
    desc: "TFS - TENERIFE SUR, TENERIFE,Spain",
},{
    value: "TUH - ARNOLD AFS, TULLAHOMA,United States",
    citycode: "THA",
    desc: "TUH - ARNOLD AFS, TULLAHOMA,United States",
},{
    value: "THA - NORTHERN, TULLAHOMA,United States",
    citycode: "THA",
    desc: "THA - NORTHERN, TULLAHOMA,United States",
},{
    value: "IKA - IMAM KHOMEINI INTL, TEHRAN,Iran",
    citycode: "THR",
    desc: "IKA - IMAM KHOMEINI INTL, TEHRAN,Iran",
},{
    value: "THR - MEHRABAD INTL, TEHRAN,Iran",
    citycode: "THR",
    desc: "THR - MEHRABAD INTL, TEHRAN,Iran",
},{
    value: "TLV - BEN GURION INTL, TEL AVIV YAFO,Israel",
    citycode: "TLV",
    desc: "TLV - BEN GURION INTL, TEL AVIV YAFO,Israel",
},{
    value: "SDV - SDE DOV, TEL AVIV YAFO,Israel",
    citycode: "TLV",
    desc: "SDV - SDE DOV, TEL AVIV YAFO,Israel",
},{
    value: "FOE - FORBES FIELD, TOPEKA,United States",
    citycode: "TOP",
    desc: "FOE - FORBES FIELD, TOPEKA,United States",
},{
    value: "TOP - PHILIP BILLARD, TOPEKA,United States",
    citycode: "TOP",
    desc: "TOP - PHILIP BILLARD, TOPEKA,United States",
},{
    value: "TSA - SONGSHAN, TAIPEI,Taiwan",
    citycode: "TPE",
    desc: "TSA - SONGSHAN, TAIPEI,Taiwan",
},{
    value: "TPE - TAIWAN TAOYUAN INTL, TAIPEI,Taiwan",
    citycode: "TPE",
    desc: "TPE - TAIWAN TAOYUAN INTL, TAIPEI,Taiwan",
},{
    value: "XSD - TEST RANGE, TONOPAH,United States",
    citycode: "TPH",
    desc: "XSD - TEST RANGE, TONOPAH,United States",
},{
    value: "TPH - TONOPAH ARPT, TONOPAH,United States",
    citycode: "TPH",
    desc: "TPH - TONOPAH ARPT, TONOPAH,United States",
},{
    value: "RVS - RICHARD LLOYD JONES JR, TULSA,United States",
    citycode: "TUL",
    desc: "RVS - RICHARD LLOYD JONES JR, TULSA,United States",
},{
    value: "TUL - TULSA INTL, TULSA,United States",
    citycode: "TUL",
    desc: "TUL - TULSA INTL, TULSA,United States",
},{
    value: "WTB - BRISBANE WEST WELLCAMP, TOOWOOMBA,Australia",
    citycode: "TWB",
    desc: "WTB - BRISBANE WEST WELLCAMP, TOOWOOMBA,Australia",
},{
    value: "TWB - TOOWOOMBA, TOOWOOMBA,Australia",
    citycode: "TWB",
    desc: "TWB - TOOWOOMBA, TOOWOOMBA,Australia",
},{
    value: "ULV - BARATAYEVKA, ULYANOVSK,Russia",
    citycode: "ULY",
    desc: "ULV - BARATAYEVKA, ULYANOVSK,Russia",
},{
    value: "ULY - VOSTOCHNY, ULYANOVSK,Russia",
    citycode: "ULY",
    desc: "ULY - VOSTOCHNY, ULYANOVSK,Russia",
},{
    value: "JOJ - DORIS LAKE ICE A/P, HOPE BAY,Canada",
    citycode: "UZM",
    desc: "JOJ - DORIS LAKE ICE A/P, HOPE BAY,Canada",
},{
    value: "UZM - HOPE BAY AIRPORT, HOPE BAY,Canada",
    citycode: "UZM",
    desc: "UZM - HOPE BAY AIRPORT, HOPE BAY,Canada",
},{
    value: "VCE - MARCO POLO, VENICE,Italy",
    citycode: "VCE",
    desc: "VCE - MARCO POLO, VENICE,Italy",
},{
    value: "TSF - TREVISO SANT ANGELO, VENICE,Italy",
    citycode: "VCE",
    desc: "TSF - TREVISO SANT ANGELO, VENICE,Italy",
},{
    value: "VAD - MOODY AFB, VALDOSTA,United States",
    citycode: "VLD",
    desc: "VAD - MOODY AFB, VALDOSTA,United States",
},{
    value: "VLD - REGIONAL, VALDOSTA,United States",
    citycode: "VLD",
    desc: "VLD - REGIONAL, VALDOSTA,United States",
},{
    value: "EGI - DUKE FIELD, VALPARAISO,United States",
    citycode: "VPS",
    desc: "EGI - DUKE FIELD, VALPARAISO,United States",
},{
    value: "VPS - FORT WALTON BEACH, VALPARAISO,United States",
    citycode: "VPS",
    desc: "VPS - FORT WALTON BEACH, VALPARAISO,United States",
},{
    value: "VRA - JUAN G. GOMEZ INTL, VARADERO,Cuba",
    citycode: "VRA",
    desc: "VRA - JUAN G. GOMEZ INTL, VARADERO,Cuba",
},{
    value: "VRO - KAWAMA AIRPORT, VARADERO,Cuba",
    citycode: "VRA",
    desc: "VRO - KAWAMA AIRPORT, VARADERO,Cuba",
},{
    value: "VBS - BRESCIA MONTECHIARI, VERONA,Italy",
    citycode: "VRN",
    desc: "VBS - BRESCIA MONTECHIARI, VERONA,Italy",
},{
    value: "VRN - VILLAFRANCA, VERONA,Italy",
    citycode: "VRN",
    desc: "VRN - VILLAFRANCA, VERONA,Italy",
},{
    value: "WCA - GAMBOA, CASTRO,Chile",
    citycode: "WCA",
    desc: "WCA - GAMBOA, CASTRO,Chile",
},{
    value: "MHC - MOCOPULLI, CASTRO,Chile",
    citycode: "WCA",
    desc: "MHC - MOCOPULLI, CASTRO,Chile",
},{
    value: "END - VANCE AFB, ENID,United States",
    citycode: "WDG",
    desc: "END - VANCE AFB, ENID,United States",
},{
    value: "WDG - WOODRING REGIONAL, ENID,United States",
    citycode: "WDG",
    desc: "WDG - WOODRING REGIONAL, ENID,United States",
},{
    value: "ERS - EROS, WINDHOEK,Namibia",
    citycode: "WDH",
    desc: "ERS - EROS, WINDHOEK,Namibia",
},{
    value: "WDH - HOSEA KUTAKO INT L, WINDHOEK,Namibia",
    citycode: "WDH",
    desc: "WDH - HOSEA KUTAKO INT L, WINDHOEK,Namibia",
},{
    value: "NSI - NSIMALEN INTL, YAOUNDE,Cameroon",
    citycode: "YAO",
    desc: "NSI - NSIMALEN INTL, YAOUNDE,Cameroon",
},{
    value: "YAO - YAOUNDE VILLE APT, YAOUNDE,Cameroon",
    citycode: "YAO",
    desc: "YAO - YAOUNDE VILLE APT, YAOUNDE,Cameroon",
},{
    value: "YTP - HARBOUR SPB, TOFINO,Canada",
    citycode: "YAZ",
    desc: "YTP - HARBOUR SPB, TOFINO,Canada",
},{
    value: "YAZ - LONG BEACH, TOFINO,Canada",
    citycode: "YAZ",
    desc: "YAZ - LONG BEACH, TOFINO,Canada",
},{
    value: "YBL - AIRPORT, CAMPBELL RIVER,Canada",
    citycode: "YBL",
    desc: "YBL - AIRPORT, CAMPBELL RIVER,Canada",
},{
    value: "YHH - SPB, CAMPBELL RIVER,Canada",
    citycode: "YBL",
    desc: "YHH - SPB, CAMPBELL RIVER,Canada",
},{
    value: "YCD - AIRPORT, NANAIMO,Canada",
    citycode: "YCD",
    desc: "YCD - AIRPORT, NANAIMO,Canada",
},{
    value: "ZNA - HARBOUR SPB, NANAIMO,Canada",
    citycode: "YCD",
    desc: "ZNA - HARBOUR SPB, NANAIMO,Canada",
},{
    value: "YKM - AIR TERMINAL, YAKIMA,United States",
    citycode: "YKM",
    desc: "YKM - AIR TERMINAL, YAKIMA,United States",
},{
    value: "FCT - VAGABOND AHP, YAKIMA,United States",
    citycode: "YKM",
    desc: "FCT - VAGABOND AHP, YAKIMA,United States",
},{
    value: "YMM - FORT MCMURRAY, FORT MCMURRAY,Canada",
    citycode: "YMM",
    desc: "YMM - FORT MCMURRAY, FORT MCMURRAY,Canada",
},{
    value: "NML - MILDRED LAKE, FORT MCMURRAY,Canada",
    citycode: "YMM",
    desc: "NML - MILDRED LAKE, FORT MCMURRAY,Canada",
},{
    value: "YPR - AIRPORT, PRINCE RUPERT,Canada",
    citycode: "YPR",
    desc: "YPR - AIRPORT, PRINCE RUPERT,Canada",
},{
    value: "ZSW - SEAL COVE SPB, PRINCE RUPERT,Canada",
    citycode: "YPR",
    desc: "ZSW - SEAL COVE SPB, PRINCE RUPERT,Canada",
},{
    value: "WPL - POWELL LAKE SPB, POWELL RIVER,Canada",
    citycode: "YPW",
    desc: "WPL - POWELL LAKE SPB, POWELL RIVER,Canada",
},{
    value: "YPW - POWELL RIVER, POWELL RIVER,Canada",
    citycode: "YPW",
    desc: "YPW - POWELL RIVER, POWELL RIVER,Canada",
},{
    value: "LGF - LAGUNA AAF, YUMA,United States",
    citycode: "YUM",
    desc: "LGF - LAGUNA AAF, YUMA,United States",
},{
    value: "YUM - YUMA INTL, YUMA,United States",
    citycode: "YUM",
    desc: "YUM - YUMA INTL, YUMA,United States",
},{
    value: "YVA - ICONI, MORONI,Comoros",
    citycode: "YVA",
    desc: "YVA - ICONI, MORONI,Comoros",
},{
    value: "HAH - PRINCE SAID IBRAHIM, MORONI,Comoros",
    citycode: "YVA",
    desc: "HAH - PRINCE SAID IBRAHIM, MORONI,Comoros",
},{
    value: "YWH - INNER HARBOUR SPB, VICTORIA,Canada",
    citycode: "YYJ",
    desc: "YWH - INNER HARBOUR SPB, VICTORIA,Canada",
},{
    value: "YYJ - VICTORIA INTL, VICTORIA,Canada",
    citycode: "YYJ",
    desc: "YYJ - VICTORIA INTL, VICTORIA,Canada",
},{
    value: "ZCO - LA ARAUCANIA, TEMUCO,Chile",
    citycode: "ZCO",
    desc: "ZCO - LA ARAUCANIA, TEMUCO,Chile",
},{
    value: "PZS - MAQUEHUE, TEMUCO,Chile",
    citycode: "ZCO",
    desc: "PZS - MAQUEHUE, TEMUCO,Chile",
},{
    value: "ZEL - CAMPBELL ISLAND, BELLA,Canada",
    citycode: "ZEL",
    desc: "ZEL - CAMPBELL ISLAND, BELLA,Canada",
},{
    value: "YSX - SHEARWATER, BELLA,Canada",
    citycode: "ZEL",
    desc: "YSX - SHEARWATER, BELLA,Canada",
},{
    value: "AAA - ANAA ,ANAA,French Polynesia",
    citycode: "AAA",
    desc: "AAA - ANAA ,ANAA,French Polynesia",
},{
    value: "AAB - ARRABURY ,ARRABURY,Australia",
    citycode: "AAB",
    desc: "AAB - ARRABURY ,ARRABURY,Australia",
},{
    value: "AAC - INTERNATIONAL ,EL ARISH,Egypt",
    citycode: "AAC",
    desc: "AAC - INTERNATIONAL ,EL ARISH,Egypt",
},{
    value: "AAE - RABAH BITAT ,ANNABA,Algeria",
    citycode: "AAE",
    desc: "AAE - RABAH BITAT ,ANNABA,Algeria",
},{
    value: "AAF - APALACHICOLA MNPL ,APALACHICOLA,United States",
    citycode: "AAF",
    desc: "AAF - APALACHICOLA MNPL ,APALACHICOLA,United States",
},{
    value: "AAG - AVELINO VIEIRA ,ARAPOTI,Brazil",
    citycode: "AAG",
    desc: "AAG - AVELINO VIEIRA ,ARAPOTI,Brazil",
},{
    value: "AAH - MERZBRUECK ,AACHEN,Germany",
    citycode: "AAH",
    desc: "AAH - MERZBRUECK ,AACHEN,Germany",
},{
    value: "AAI - ARRAIAS ,ARRAIAS,Brazil",
    citycode: "AAI",
    desc: "AAI - ARRAIAS ,ARRAIAS,Brazil",
},{
    value: "AAJ - CAJANA ,AWARADAM,Suriname",
    citycode: "AAJ",
    desc: "AAJ - CAJANA ,AWARADAM,Suriname",
},{
    value: "AAK - ARANUKA ,ARANUKA,Kiribati",
    citycode: "AAK",
    desc: "AAK - ARANUKA ,ARANUKA,Kiribati",
},{
    value: "AAL - AALBORG ,AALBORG,Denmark",
    citycode: "AAL",
    desc: "AAL - AALBORG ,AALBORG,Denmark",
},{
    value: "AAM - MALA MALA ,MALA MALA,South Africa",
    citycode: "AAM",
    desc: "AAM - MALA MALA ,MALA MALA,South Africa",
},{
    value: "AAN - INTERNATIONAL ,AL AIN,United Arab Emirates",
    citycode: "AAN",
    desc: "AAN - INTERNATIONAL ,AL AIN,United Arab Emirates",
},{
    value: "AAO - ANACO ,ANACO,Venezuela",
    citycode: "AAO",
    desc: "AAO - ANACO ,ANACO,Venezuela",
},{
    value: "AAP - ANDRAU AIRPARK ,HOUSTON,United States",
    citycode: "AAP",
    desc: "AAP - ANDRAU AIRPARK ,HOUSTON,United States",
},{
    value: "AAQ - VITYAZEVO ,ANAPA,Russia",
    citycode: "AAQ",
    desc: "AAQ - VITYAZEVO ,ANAPA,Russia",
},{
    value: "AAS - APALAPSILI ,APALAPSILI,Indonesia",
    citycode: "AAS",
    desc: "AAS - APALAPSILI ,APALAPSILI,Indonesia",
},{
    value: "AAT - ALTAY ,ALTAY,China",
    citycode: "AAT",
    desc: "AAT - ALTAY ,ALTAY,China",
},{
    value: "AAU - ASAU ,ASAU,Western Samoa",
    citycode: "AAU",
    desc: "AAU - ASAU ,ASAU,Western Samoa",
},{
    value: "AAV - ALLAH VALLEY ,SURALLAH,Philippines",
    citycode: "AAV",
    desc: "AAV - ALLAH VALLEY ,SURALLAH,Philippines",
},{
    value: "AAX - ARAXA ,ARAXA,Brazil",
    citycode: "AAX",
    desc: "AAX - ARAXA ,ARAXA,Brazil",
},{
    value: "AAY - AL GHAYDAH ,AL GHAYDAH,Yemen",
    citycode: "AAY",
    desc: "AAY - AL GHAYDAH ,AL GHAYDAH,Yemen",
},{
    value: "AAZ - QUETZALTENANGO ,QUETZALTENANGO,Guatemala",
    citycode: "AAZ",
    desc: "AAZ - QUETZALTENANGO ,QUETZALTENANGO,Guatemala",
},{
    value: "ABA - ABAKAN ,ABAKAN,Russia",
    citycode: "ABA",
    desc: "ABA - ABAKAN ,ABAKAN,Russia",
},{
    value: "ABB - INTERNATIONAL ,ASABA,Nigeria",
    citycode: "ABB",
    desc: "ABB - INTERNATIONAL ,ASABA,Nigeria",
},{
    value: "ABC - AIRPORT ,ALBACETE,Spain",
    citycode: "ABC",
    desc: "ABC - AIRPORT ,ALBACETE,Spain",
},{
    value: "ABD - ABADAN ,ABADAN,Iran",
    citycode: "ABD",
    desc: "ABD - ABADAN ,ABADAN,Iran",
},{
    value: "ABE - ALLENTOWN BTHLEHM ,United States",
    citycode: "ABE",
    desc: "ABE - ALLENTOWN BTHLEHM ,United States",
},{
    value: "ABF - ABAIANG ,ABAIANG,Kiribati",
    citycode: "ABF",
    desc: "ABF - ABAIANG ,ABAIANG,Kiribati",
},{
    value: "ABG - ABINGDON DOWNS ,ABINGDON DOWNS,Australia",
    citycode: "ABG",
    desc: "ABG - ABINGDON DOWNS ,ABINGDON DOWNS,Australia",
},{
    value: "ABH - ALPHA ,ALPHA,Australia",
    citycode: "ABH",
    desc: "ABH - ALPHA ,ALPHA,Australia",
},{
    value: "ABJ - F HOUPHOUET BOIGNY ,ABIDJAN,Cote d Ivoire",
    citycode: "ABJ",
    desc: "ABJ - F HOUPHOUET BOIGNY ,ABIDJAN,Cote d Ivoire",
},{
    value: "ABK - KABRI DEHAR ,KABRI DEHAR,Ethiopia",
    citycode: "ABK",
    desc: "ABK - KABRI DEHAR ,KABRI DEHAR,Ethiopia",
},{
    value: "ABL - AMBLER ,AMBLER,United States",
    citycode: "ABL",
    desc: "ABL - AMBLER ,AMBLER,United States",
},{
    value: "ABM - NORTHERN PENINSULA ,BAMAGA,Australia",
    citycode: "ABM",
    desc: "ABM - NORTHERN PENINSULA ,BAMAGA,Australia",
},{
    value: "ABN - ALBINA ,ALBINA,Suriname",
    citycode: "ABN",
    desc: "ABN - ALBINA ,ALBINA,Suriname",
},{
    value: "ABO - ABOISSO ,ABOISSO,Cote d Ivoire",
    citycode: "ABO",
    desc: "ABO - ABOISSO ,ABOISSO,Cote d Ivoire",
},{
    value: "ABP - ATKAMBA ,ATKAMBA,Papua New Guinea",
    citycode: "ABP",
    desc: "ABP - ATKAMBA ,ATKAMBA,Papua New Guinea",
},{
    value: "ABQ - INTERNATIONAL SUNPORT ,ALBUQUERQUE,United States",
    citycode: "ABQ",
    desc: "ABQ - INTERNATIONAL SUNPORT ,ALBUQUERQUE,United States",
},{
    value: "ABR - ABERDEEN MNPL ,ABERDEEN,United States",
    citycode: "ABR",
    desc: "ABR - ABERDEEN MNPL ,ABERDEEN,United States",
},{
    value: "ABS - ABU SIMBEL ,ABU SIMBEL,Egypt",
    citycode: "ABS",
    desc: "ABS - ABU SIMBEL ,ABU SIMBEL,Egypt",
},{
    value: "ABT - AL-AQIQ ,AL BAHA,Saudi Arabia",
    citycode: "ABT",
    desc: "ABT - AL-AQIQ ,AL BAHA,Saudi Arabia",
},{
    value: "ABU - HALIWEN ,ATAMBUA,Indonesia",
    citycode: "ABU",
    desc: "ABU - HALIWEN ,ATAMBUA,Indonesia",
},{
    value: "ABV - NNAMDI AZIKIWE INTL ,ABUJA,Nigeria",
    citycode: "ABV",
    desc: "ABV - NNAMDI AZIKIWE INTL ,ABUJA,Nigeria",
},{
    value: "ABX - ALBURY ,ALBURY,Australia",
    citycode: "ABX",
    desc: "ABX - ALBURY ,ALBURY,Australia",
},{
    value: "ABW - ABAU ,ABAU,Papua New Guinea",
    citycode: "ABW",
    desc: "ABW - ABAU ,ABAU,Papua New Guinea",
},{
    value: "ABZ - DYCE ,ABERDEEN,United Kingdom",
    citycode: "ABZ",
    desc: "ABZ - DYCE ,ABERDEEN,United Kingdom",
},{
    value: "ACA - JUAN N. ALVAREZ INTL ,ACAPULCO,Mexico",
    citycode: "ACA",
    desc: "ACA - JUAN N. ALVAREZ INTL ,ACAPULCO,Mexico",
},{
    value: "ACB - ANTRIM COUNTY ,BELLAIRE,United States",
    citycode: "ACB",
    desc: "ACB - ANTRIM COUNTY ,BELLAIRE,United States",
},{
    value: "ACC - KOTOKA INTL ,ACCRA,Ghana",
    citycode: "ACC",
    desc: "ACC - KOTOKA INTL ,ACCRA,Ghana",
},{
    value: "ACD - ALCIDES FERNANDEZ ,ACANDI,Colombia",
    citycode: "ACD",
    desc: "ACD - ALCIDES FERNANDEZ ,ACANDI,Colombia",
},{
    value: "ACE - LANZAROTE ,LANZAROTE,Spain",
    citycode: "ACE",
    desc: "ACE - LANZAROTE ,LANZAROTE,Spain",
},{
    value: "ACH - SAINT GALLEN-ALTENRHEIN ,ALTENRHEIN,Switzerland",
    citycode: "ACH",
    desc: "ACH - SAINT GALLEN-ALTENRHEIN ,ALTENRHEIN,Switzerland",
},{
    value: "ACI - ALDERNEY ,ALDERNEY,United Kingdom",
    citycode: "ACI",
    desc: "ACI - ALDERNEY ,ALDERNEY,United Kingdom",
},{
    value: "ACJ - ANURADHAPURA ,ANURADHAPURA,Sri Lanka",
    citycode: "ACJ",
    desc: "ACJ - ANURADHAPURA ,ANURADHAPURA,Sri Lanka",
},{
    value: "ACK - MEMORIAL ,NANTUCKET,United States",
    citycode: "ACK",
    desc: "ACK - MEMORIAL ,NANTUCKET,United States",
},{
    value: "ACL - AGUACLARA ,AGUACLARA,Colombia",
    citycode: "ACL",
    desc: "ACL - AGUACLARA ,AGUACLARA,Colombia",
},{
    value: "ACM - ARICA ,ARICA,Colombia",
    citycode: "ACM",
    desc: "ACM - ARICA ,ARICA,Colombia",
},{
    value: "ACN - CIUDAD ACUNA INTL ,CIUDAD ACUNA,Mexico",
    citycode: "ACN",
    desc: "ACN - CIUDAD ACUNA INTL ,CIUDAD ACUNA,Mexico",
},{
    value: "ACP - SAHAND AIRPORT ,MARAGHEH,Iran",
    citycode: "ACP",
    desc: "ACP - SAHAND AIRPORT ,MARAGHEH,Iran",
},{
    value: "ACR - ARARACUARA ,ARARACUARA,Colombia",
    citycode: "ACR",
    desc: "ACR - ARARACUARA ,ARARACUARA,Colombia",
},{
    value: "ACS - ACHINSK ,ACHINSK,Russia",
    citycode: "ACS",
    desc: "ACS - ACHINSK ,ACHINSK,Russia",
},{
    value: "ACU - ACHUTUPO ,ACHUTUPO,Panama",
    citycode: "ACU",
    desc: "ACU - ACHUTUPO ,ACHUTUPO,Panama",
},{
    value: "ACX - XINGYI ,XINGYI,China",
    citycode: "ACX",
    desc: "ACX - XINGYI ,XINGYI,China",
},{
    value: "ACY - ATLANTIC CITY INTL ,ATLANTIC CITY,United States",
    citycode: "ACY",
    desc: "ACY - ATLANTIC CITY INTL ,ATLANTIC CITY,United States",
},{
    value: "ACZ - ZABOL AIRPORT ,ZABOL,Iran",
    citycode: "ACZ",
    desc: "ACZ - ZABOL AIRPORT ,ZABOL,Iran",
},{
    value: "ADB - ADNAN MENDERES ,IZMIR,Turkey",
    citycode: "ADB",
    desc: "ADB - ADNAN MENDERES ,IZMIR,Turkey",
},{
    value: "ADD - BOLE INTL ,ADDIS ABABA,Ethiopia",
    citycode: "ADD",
    desc: "ADD - BOLE INTL ,ADDIS ABABA,Ethiopia",
},{
    value: "ADE - ADEN INTL ,ADEN,Yemen",
    citycode: "ADE",
    desc: "ADE - ADEN INTL ,ADEN,Yemen",
},{
    value: "ADF - ADIYAMAN ,ADIYAMAN,Turkey",
    citycode: "ADF",
    desc: "ADF - ADIYAMAN ,ADIYAMAN,Turkey",
},{
    value: "ADG - LENAWEE COUNTY ,ADRIAN,United States",
    citycode: "ADG",
    desc: "ADG - LENAWEE COUNTY ,ADRIAN,United States",
},{
    value: "ADH - ALDAN ,ALDAN,Russia",
    citycode: "ADH",
    desc: "ADH - ALDAN ,ALDAN,Russia",
},{
    value: "ADI - ARANDIS ,ARANDIS,Namibia",
    citycode: "ADI",
    desc: "ADI - ARANDIS ,ARANDIS,Namibia",
},{
    value: "ADJ - MARKA INTL ,AMMAN,Jordan",
    citycode: "ADJ",
    desc: "ADJ - MARKA INTL ,AMMAN,Jordan",
},{
    value: "ADK - ADAK ISLAND ,ADAK ISLAND,United States",
    citycode: "ADK",
    desc: "ADK - ADAK ISLAND ,ADAK ISLAND,United States",
},{
    value: "ADL - INTERNATIONAL ,ADELAIDE,Australia",
    citycode: "ADL",
    desc: "ADL - INTERNATIONAL ,ADELAIDE,Australia",
},{
    value: "ADN - ANDES ,ANDES,Colombia",
    citycode: "ADN",
    desc: "ADN - ANDES ,ANDES,Colombia",
},{
    value: "ADO - ANDAMOOKA ,ANDAMOOKA,Australia",
    citycode: "ADO",
    desc: "ADO - ANDAMOOKA ,ANDAMOOKA,Australia",
},{
    value: "ADR - ANDREWS ,ANDREWS,United States",
    citycode: "ADR",
    desc: "ADR - ANDREWS ,ANDREWS,United States",
},{
    value: "ADS - ADDISON ,DALLAS,United States",
    citycode: "ADS",
    desc: "ADS - ADDISON ,DALLAS,United States",
},{
    value: "ADT - MINICIPAL ,ADA,United States",
    citycode: "ADT",
    desc: "ADT - MINICIPAL ,ADA,United States",
},{
    value: "ADU - ARDABIL ,ARDABIL,Iran",
    citycode: "ADU",
    desc: "ADU - ARDABIL ,ARDABIL,Iran",
},{
    value: "ADU - ARDABIL ,ARDABIL,Iran",
    citycode: "ADU",
    desc: "ADU - ARDABIL ,ARDABIL,Iran",
},{
    value: "ADV - ADDEAIN ,ADDEAIN,Sudan",
    citycode: "ADV",
    desc: "ADV - ADDEAIN ,ADDEAIN,Sudan",
},{
    value: "ADX - LEUCHARS RAF ,SAINT ANDREWS,United Kingdom",
    citycode: "ADX",
    desc: "ADX - LEUCHARS RAF ,SAINT ANDREWS,United Kingdom",
},{
    value: "ADY - ALLDAYS ,ALLDAYS,South Africa",
    citycode: "ADY",
    desc: "ADY - ALLDAYS ,ALLDAYS,South Africa",
},{
    value: "ADZ - GUSTAVO R PINILLA INT ,SAN ANDRES ISLAND,Colombia",
    citycode: "ADZ",
    desc: "ADZ - GUSTAVO R PINILLA INT ,SAN ANDRES ISLAND,Colombia",
},{
    value: "AEA - ABEMAMA ,ABEMAMA,Kiribati",
    citycode: "AEA",
    desc: "AEA - ABEMAMA ,ABEMAMA,Kiribati",
},{
    value: "AEB - YOUJIANG ,BAISE,China",
    citycode: "AEB",
    desc: "AEB - YOUJIANG ,BAISE,China",
},{
    value: "AED - ALENEVA ,ALENEVA,United States",
    citycode: "AED",
    desc: "AED - ALENEVA ,ALENEVA,United States",
},{
    value: "AEE - ADAREIL ,ADAREIL,South Sudan",
    citycode: "AEE",
    desc: "AEE - ADAREIL ,ADAREIL,South Sudan",
},{
    value: "AEG - AEKGODANG ,PADANGSIDEMPUAN,Indonesia",
    citycode: "AEG",
    desc: "AEG - AEKGODANG ,PADANGSIDEMPUAN,Indonesia",
},{
    value: "AEH - ABECHE ,ABECHE,Chad",
    citycode: "AEH",
    desc: "AEH - ABECHE ,ABECHE,Chad",
},{
    value: "AEK - ASEKI ,ASEKI,Papua New Guinea",
    citycode: "AEK",
    desc: "AEK - ASEKI ,ASEKI,Papua New Guinea",
},{
    value: "AEO - AIOUN EL ATROUSS ,AIOUN EL ATROUSS,Mauritania",
    citycode: "AEO",
    desc: "AEO - AIOUN EL ATROUSS ,AIOUN EL ATROUSS,Mauritania",
},{
    value: "AEP - J. NEWBERY ,BUENOS AIRES,Argentina",
    citycode: "AEP",
    desc: "AEP - J. NEWBERY ,BUENOS AIRES,Argentina",
},{
    value: "AER - SOCHI INTL ,SOCHI,Russia",
    citycode: "AER",
    desc: "AER - SOCHI INTL ,SOCHI,Russia",
},{
    value: "AES - VIGRA ,ALESUND,Norway",
    citycode: "AES",
    desc: "AES - VIGRA ,ALESUND,Norway",
},{
    value: "AET - ALLAKAKET ,ALLAKAKET,United States",
    citycode: "AET",
    desc: "AET - ALLAKAKET ,ALLAKAKET,United States",
},{
    value: "AEU - ABU MUSA ISLAND ,ABU MUSA ISLAND,Iran",
    citycode: "AEU",
    desc: "AEU - ABU MUSA ISLAND ,ABU MUSA ISLAND,Iran",
},{
    value: "AEY - AKUREYRI ,AKUREYRI,Iceland",
    citycode: "AEY",
    desc: "AEY - AKUREYRI ,AKUREYRI,Iceland",
},{
    value: "AFA - SAN RAFAEL ,SAN RAFAEL,Argentina",
    citycode: "AFA",
    desc: "AFA - SAN RAFAEL ,SAN RAFAEL,Argentina",
},{
    value: "AFD - PORT ALFRED ,PORT ALFRED,South Africa",
    citycode: "AFD",
    desc: "AFD - PORT ALFRED ,PORT ALFRED,South Africa",
},{
    value: "AFF - USAF ACADEMY AIRFIELD ,COLORADO SPRINGS,United States",
    citycode: "COS",
    desc: "AFF - USAF ACADEMY AIRFIELD ,COLORADO SPRINGS,United States",
},{
    value: "AFI - AMALFI ,AMALFI,Colombia",
    citycode: "AFI",
    desc: "AFI - AMALFI ,AMALFI,Colombia",
},{
    value: "AFK - KONDAVATTAVAN TANK SPB ,AMPARA,Sri Lanka",
    citycode: "ADP",
    desc: "AFK - KONDAVATTAVAN TANK SPB ,AMPARA,Sri Lanka",
},{
    value: "AFL - OSWALDO MARQUES DIAS ,ALTA FLORESTA,Brazil",
    citycode: "AFL",
    desc: "AFL - OSWALDO MARQUES DIAS ,ALTA FLORESTA,Brazil",
},{
    value: "AFN - JAFFREY MNPL ,JAFFREY,United States",
    citycode: "AFN",
    desc: "AFN - JAFFREY MNPL ,JAFFREY,United States",
},{
    value: "AFO - AFTON MNPL ,AFTON,United States",
    citycode: "AFO",
    desc: "AFO - AFTON MNPL ,AFTON,United States",
},{
    value: "AFR - AFORE ,AFORE,Papua New Guinea",
    citycode: "AFR",
    desc: "AFR - AFORE ,AFORE,Papua New Guinea",
},{
    value: "AFS - ZARAFSHAN ,ZARAFSHAN,Uzbekistan",
    citycode: "AFS",
    desc: "AFS - ZARAFSHAN ,ZARAFSHAN,Uzbekistan",
},{
    value: "AFT - AFUTARA AERODROME ,AFUTARA,Solomon Islands",
    citycode: "AFT",
    desc: "AFT - AFUTARA AERODROME ,AFUTARA,Solomon Islands",
},{
    value: "AFW - FORT WORTH ALLIANCE ,DALLAS,United States",
    citycode: "AFW",
    desc: "AFW - FORT WORTH ALLIANCE ,DALLAS,United States",
},{
    value: "AFY - AFYON ,AFYON,Turkey",
    citycode: "AFY",
    desc: "AFY - AFYON ,AFYON,Turkey",
},{
    value: "AFZ - SABZEVAR ,SABZEVAR,Iran",
    citycode: "AFZ",
    desc: "AFZ - SABZEVAR ,SABZEVAR,Iran",
},{
    value: "AGA - AL MASSIRA ,AGADIR,Morocco",
    citycode: "AGA",
    desc: "AGA - AL MASSIRA ,AGADIR,Morocco",
},{
    value: "AGB - AUGSBURG ,MUNICH,Germany",
    citycode: "MUC",
    desc: "AGB - AUGSBURG ,MUNICH,Germany",
},{
    value: "AGC - ALLEGHENY COU ,PITTSBURGH,United States",
    citycode: "PIT",
    desc: "AGC - ALLEGHENY COU ,PITTSBURGH,United States",
},{
    value: "AGD - ANGGI ,ANGGI,Indonesia",
    citycode: "AGD",
    desc: "AGD - ANGGI ,ANGGI,Indonesia",
},{
    value: "AGE - WANGEROOGE ,WANGEROOGE,Germany",
    citycode: "AGE",
    desc: "AGE - WANGEROOGE ,WANGEROOGE,Germany",
},{
    value: "AGF - LA GARENNE ,AGEN,France",
    citycode: "AGF",
    desc: "AGF - LA GARENNE ,AGEN,France",
},{
    value: "AGG - ANGORAM ,ANGORAM,Papua New Guinea",
    citycode: "AGG",
    desc: "AGG - ANGORAM ,ANGORAM,Papua New Guinea",
},{
    value: "AGH - ANGELHOLM AIRPORT ,ANGELHOLM/HELSINGBORG,Sweden",
    citycode: "AGH",
    desc: "AGH - ANGELHOLM AIRPORT ,ANGELHOLM/HELSINGBORG,Sweden",
},{
    value: "AGI - WAGENINGEN ,WAGENINGEN,Suriname",
    citycode: "AGI",
    desc: "AGI - WAGENINGEN ,WAGENINGEN,Suriname",
},{
    value: "AGJ - AGUNI ,AGUNI,Japan",
    citycode: "AGJ",
    desc: "AGJ - AGUNI ,AGUNI,Japan",
},{
    value: "AGK - KAGUA ,KAGUA,Papua New Guinea",
    citycode: "AGK",
    desc: "AGK - KAGUA ,KAGUA,Papua New Guinea",
},{
    value: "AGL - WANIGELA ,WANIGELA,Papua New Guinea",
    citycode: "AGL",
    desc: "AGL - WANIGELA ,WANIGELA,Papua New Guinea",
},{
    value: "AGN - SEA PLANE BASE ,ANGOON,United States",
    citycode: "AGN",
    desc: "AGN - SEA PLANE BASE ,ANGOON,United States",
},{
    value: "AGO - MAGNOLIA MNPL ,MAGNOLIA,United States",
    citycode: "AGO",
    desc: "AGO - MAGNOLIA MNPL ,MAGNOLIA,United States",
},{
    value: "AGP - MALAGA AIRPORT ,MALAGA,Spain",
    citycode: "AGP",
    desc: "AGP - MALAGA AIRPORT ,MALAGA,Spain",
},{
    value: "AGQ - G.KARAISKAKIS ,AGRINION,Greece",
    citycode: "AGQ",
    desc: "AGQ - G.KARAISKAKIS ,AGRINION,Greece",
},{
    value: "AGR - AGRA ,AGRA,India",
    citycode: "AGR",
    desc: "AGR - AGRA ,AGRA,India",
},{
    value: "AGT - GUARANI INTL ,CIUDAD DEL ESTE,Paraguay",
    citycode: "AGT",
    desc: "AGT - GUARANI INTL ,CIUDAD DEL ESTE,Paraguay",
},{
    value: "AGU - JESUS TERAN PEREDO INT ,AGUASCALIENTES,Mexico",
    citycode: "AGU",
    desc: "AGU - JESUS TERAN PEREDO INT ,AGUASCALIENTES,Mexico",
},{
    value: "AGV - OSWALDO GUEVARA MUJICA ,ACARIGUA,Venezuela",
    citycode: "AGV",
    desc: "AGV - OSWALDO GUEVARA MUJICA ,ACARIGUA,Venezuela",
},{
    value: "AGX - AGATTI ISLAND ,AGATTI ISLAND,India",
    citycode: "AGX",
    desc: "AGX - AGATTI ISLAND ,AGATTI ISLAND,India",
},{
    value: "AGW - AGNEW ,AGNEW,Australia",
    citycode: "AGW",
    desc: "AGW - AGNEW ,AGNEW,Australia",
},{
    value: "AGZ - AGGENEYS ,AGGENEYS,South Africa",
    citycode: "AGZ",
    desc: "AGZ - AGGENEYS ,AGGENEYS,South Africa",
},{
    value: "AHB - ABHA ,ABHA,Saudi Arabia",
    citycode: "AHB",
    desc: "AHB - ABHA ,ABHA,Saudi Arabia",
},{
    value: "AHC - AMEDEE AAF ,HERLONG,United States",
    citycode: "AHC",
    desc: "AHC - AMEDEE AAF ,HERLONG,United States",
},{
    value: "AHD - DOWNTOWN EXECUTIVE ,ARDMORE,United States",
    citycode: "ADM",
    desc: "AHD - DOWNTOWN EXECUTIVE ,ARDMORE,United States",
},{
    value: "AHE - AHE ,AHE,French Polynesia",
    citycode: "AHE",
    desc: "AHE - AHE ,AHE,French Polynesia",
},{
    value: "AHF - ARAPAHOE MNPL ,ARAPAHOE,United States",
    citycode: "AHF",
    desc: "AHF - ARAPAHOE MNPL ,ARAPAHOE,United States",
},{
    value: "AHH - AMERY MNPL ,AMERY,United States",
    citycode: "AHH",
    desc: "AHH - AMERY MNPL ,AMERY,United States",
},{
    value: "AHI - AMAHAI ,AMAHAI,Indonesia",
    citycode: "AHH",
    desc: "AHI - AMAHAI ,AMAHAI,Indonesia",
},{
    value: "AHJ - ABA HONGYUAN ,ABA HONGYUAN,China",
    citycode: "AHJ",
    desc: "AHJ - ABA HONGYUAN ,ABA HONGYUAN,China",
},{
    value: "AHL - AISHALTON ,AISHALTON,Guyana",
    citycode: "AHL",
    desc: "AHL - AISHALTON ,AISHALTON,Guyana",
},{
    value: "AHM - MUNICIPAL ,ASHLAND,United States",
    citycode: "AHM",
    desc: "AHM - MUNICIPAL ,ASHLAND,United States",
},{
    value: "AHN - ATHENS ,ATHENS,United States",
    citycode: "AHN",
    desc: "AHN - ATHENS ,ATHENS,United States",
},{
    value: "AHO - FERTILIA ,ALGHERO,Italy",
    citycode: "AHO",
    desc: "AHO - FERTILIA ,ALGHERO,Italy",
},{
    value: "AHS - AHUAS ,AHUAS,Honduras",
    citycode: "AHS",
    desc: "AHS - AHUAS ,AHUAS,Honduras",
},{
    value: "AHU - CHERIF AL IDRISS ,AL HOCEIMA,Morocco",
    citycode: "AHU",
    desc: "AHU - CHERIF AL IDRISS ,AL HOCEIMA,Morocco",
},{
    value: "AHW - SAIH RAWL ,SAIH RAWL,Oman",
    citycode: "AHW",
    desc: "AHW - SAIH RAWL ,SAIH RAWL,Oman",
},{
    value: "AHY - AMBATOLAHY ,AMBATOLAHY,Madagascar",
    citycode: "AHY",
    desc: "AHY - AMBATOLAHY ,AMBATOLAHY,Madagascar",
},{
    value: "AHZ - L ALPE D HUEZ ,L ALPE D HUEZ,France",
    citycode: "AHZ",
    desc: "AHZ - L ALPE D HUEZ ,L ALPE D HUEZ,France",
},{
    value: "AIA - ALLIANCE ,ALLIANCE,United States",
    citycode: "AIA",
    desc: "AIA - ALLIANCE ,ALLIANCE,United States",
},{
    value: "AIC - AILINGLAPALAP ,AIROK,Marshall Islands",
    citycode: "AIC",
    desc: "AIC - AILINGLAPALAP ,AIROK,Marshall Islands",
},{
    value: "AID - ANDERSON MNPL ,ANDERSON,United States",
    citycode: "AID",
    desc: "AID - ANDERSON MNPL ,ANDERSON,United States",
},{
    value: "AIE - AIOME ,AIOME,Papua New Guinea",
    citycode: "AIE",
    desc: "AIE - AIOME ,AIOME,Papua New Guinea",
},{
    value: "AIF - MARCELO P.HALZHAUSEN ,ASSIS,Brazil",
    citycode: "AIF",
    desc: "AIF - MARCELO P.HALZHAUSEN ,ASSIS,Brazil",
},{
    value: "AIG - YALINGA ,YALINGA,Central African Republic",
    citycode: "AIG",
    desc: "AIG - YALINGA ,YALINGA,Central African Republic",
},{
    value: "AII - ALI SABIEH ,ALI SABIEH,Djibouti",
    citycode: "AII",
    desc: "AII - ALI SABIEH ,ALI SABIEH,Djibouti",
},{
    value: "AIK - AIKEN MNPL ,AIKEN,United States",
    citycode: "AIK",
    desc: "AIK - AIKEN MNPL ,AIKEN,United States",
},{
    value: "AIL - AILIGANDI ,AILIGANDI,Panama",
    citycode: "AIL",
    desc: "AIL - AILIGANDI ,AILIGANDI,Panama",
},{
    value: "AIM - AILUK ISLAND ,AILUK ISLAND,Marshall Islands",
    citycode: "AIM",
    desc: "AIM - AILUK ISLAND ,AILUK ISLAND,Marshall Islands",
},{
    value: "AIN - WAINWRIGHT ,WAINWRIGHT,United States",
    citycode: "AIN",
    desc: "AIN - WAINWRIGHT ,WAINWRIGHT,United States",
},{
    value: "AIO - ATLANTIC MNPL ,ATLANTIC,United States",
    citycode: "AIO",
    desc: "AIO - ATLANTIC MNPL ,ATLANTIC,United States",
},{
    value: "AIR - ARIPUANA ,ARIPUANA,Brazil",
    citycode: "AIR",
    desc: "AIR - ARIPUANA ,ARIPUANA,Brazil",
},{
    value: "AIS - ARORAE ,ARORAE,Kiribati",
    citycode: "AIS",
    desc: "AIS - ARORAE ,ARORAE,Kiribati",
},{
    value: "AIT - AITUTAKI ISLAND ,AITUTAKI ISLAND,Cook Islands",
    citycode: "AIT",
    desc: "AIT - AITUTAKI ISLAND ,AITUTAKI ISLAND,Cook Islands",
},{
    value: "AIU - ATIU ISLAND ,ATIU ISLAND,Cook Islands",
    citycode: "AIU",
    desc: "AIU - ATIU ISLAND ,ATIU ISLAND,Cook Islands",
},{
    value: "AIV - GEORGE DOWNER ,ALICEVILLE,United States",
    citycode: "AIV",
    desc: "AIV - GEORGE DOWNER ,ALICEVILLE,United States",
},{
    value: "AIW - AI AIS ,AI AIS,Namibia",
    citycode: "AIW",
    desc: "AIW - AI AIS ,AI AIS,Namibia",
},{
    value: "AIZ - LEE C FINE MEMORIAL ,KAISER LAKE OZARK,United States",
    citycode: "AIZ",
    desc: "AIZ - LEE C FINE MEMORIAL ,KAISER LAKE OZARK,United States",
},{
    value: "AJA - NAPOLEON BONAPARTE ,AJACCIO,France",
    citycode: "AJA",
    desc: "AJA - NAPOLEON BONAPARTE ,AJACCIO,France",
},{
    value: "AJF - JOUF ,JOUF,Saudi Arabia",
    citycode: "AJF",
    desc: "AJF - JOUF ,JOUF,Saudi Arabia",
},{
    value: "AJI - AGRI ,AGRI,Turkey",
    citycode: "AJI",
    desc: "AJI - AGRI ,AGRI,Turkey",
},{
    value: "AJJ - AKJOUJT ,AKJOUJT,Mauritania",
    citycode: "AJJ",
    desc: "AJJ - AKJOUJT ,AKJOUJT,Mauritania",
},{
    value: "AJK - ARAAK ,ARAAK,Iran",
    citycode: "AJK",
    desc: "AJK - ARAAK ,ARAAK,Iran",
},{
    value: "AJL - LENGPUI ,AIZAWL,India",
    citycode: "AJL",
    desc: "AJL - LENGPUI ,AIZAWL,India",
},{
    value: "AJN - OUANI ,ANJOUAN,Comoros",
    citycode: "AJN",
    desc: "AJN - OUANI ,ANJOUAN,Comoros",
},{
    value: "AJR - ARVIDSJAUR ,ARVIDSJAUR,Sweden",
    citycode: "AJR",
    desc: "AJR - ARVIDSJAUR ,ARVIDSJAUR,Sweden",
},
/*Mustaq*/
{
    value: "AJS - PUNTA ABREOJOS, PUNTA ABREOJOS,Mexico",
    citycode: "AJS",
    desc: "AJS - PUNTA ABREOJOS, PUNTA ABREOJOS,Mexico",
},{
    value: "AJU - SANTA MARIA, ARACAJU,Brazil",
    citycode: "AJU",
    desc: "AJU - SANTA MARIA, ARACAJU,Brazil",
},{
    value: "AJY - MANU DAYAK INTL, AGADEZ,Niger",
    citycode: "AJY",
    desc: "AJY - MANU DAYAK INTL, AGADEZ,Niger",
},{
    value: "AKA - WALIPU, ANKANG,China",
    citycode: "AKA",
    desc: "AKA - WALIPU, ANKANG,China",
},{
    value: "AKB - ATKA, ATKA,United States",
    citycode: "AKB",
    desc: "AKB - ATKA, ATKA,United States",
},{
    value: "AKC - AKRON FULTON, CANTON AKRON,United States",
    citycode: "CAK",
    desc: "AKC - AKRON FULTON, CANTON AKRON,United States",
},{
    value: "AKD - AKOLA, AKOLA,India",
    citycode: "AKD",
    desc: "AKD - AKOLA, AKOLA,India",
},{
    value: "AKE - AKIENI, AKIENI,Gabon",
    citycode: "AKE",
    desc: "AKE - AKIENI, AKIENI,Gabon",
},{
    value: "AKF - KUFRA, KUFRA,Libya",
    citycode: "AKF",
    desc: "AKF - KUFRA, KUFRA,Libya",
},{
    value: "AKG - ANGUGANAK, ANGUGANAK,Papua New Guinea",
    citycode: "AKG",
    desc: "AKG - ANGUGANAK, ANGUGANAK,Papua New Guinea",
},{
    value: "AKH - PRINCE SULTAN AIR BASE, AL KHARJ,Saudi Arabia",
    citycode: "AKH",
    desc: "AKH - PRINCE SULTAN AIR BASE, AL KHARJ,Saudi Arabia",
},{
    value: "AKI - AKIAK, AKIAK,United States",
    citycode: "AKI",
    desc: "AKI - AKIAK, AKIAK,United States",
},{
    value: "AKJ - ASAHIKAWA, ASAHIKAWA,Japan",
    citycode: "AKJ",
    desc: "AKJ - ASAHIKAWA, ASAHIKAWA,Japan",
},{
    value: "AKK - AKHIOK, AKHIOK,United States",
    citycode: "AKK",
    desc: "AKK - AKHIOK, AKHIOK,United States",
},{
    value: "AKM - ZAKOUMA, ZAKOUMA,Chad",
    citycode: "AKM",
    desc: "AKM - ZAKOUMA, ZAKOUMA,Chad",
},{
    value: "AKN - KING SALMON, KING SALMON,United States",
    citycode: "AKN",
    desc: "AKN - KING SALMON, KING SALMON,United States",
},{
    value: "AKO - COLORADO PLAINS RGNL, AKRON,United States",
    citycode: "AKO",
    desc: "AKO - COLORADO PLAINS RGNL, AKRON,United States",
},{
    value: "AKP - ANAKTUVUK PASS, ANAKTUVUK PASS,United States",
    citycode: "AKP",
    desc: "AKP - ANAKTUVUK PASS, ANAKTUVUK PASS,United States",
},{
    value: "AKQ - ASTRA KSETRA, MENGGALA,Indonesia",
    citycode: "AKQ",
    desc: "AKQ - ASTRA KSETRA, MENGGALA,Indonesia",
},{
    value: "AKR - AKURE, AKURE,Nigeria",
    citycode: "AKR",
    desc: "AKR - AKURE, AKURE,Nigeria",
},{
    value: "AKS - GWAUNARU U, AUKI,Solomon Islands",
    citycode: "AKS",
    desc: "AKS - GWAUNARU U, AUKI,Solomon Islands",
},{
    value: "AKT - RAF STATION, AKROTIRI,Cyprus",
    citycode: "AKT",
    desc: "AKT - RAF STATION, AKROTIRI,Cyprus",
},{
    value: "AKU - AKSU, AKSU,China",
    citycode: "AKU",
    desc: "AKU - AKSU, AKSU,China",
},{
    value: "AKV - AKULIVIK, AKULIVIK,Canada",
    citycode: "AKV",
    desc: "AKV - AKULIVIK, AKULIVIK,Canada",
},{
    value: "AKX - AKTOBE, AKTOBE,Kazakhstan",
    citycode: "AKX",
    desc: "AKX - AKTOBE, AKTOBE,Kazakhstan",
},{
    value: "AKW - AGHAJARI, AGHAJARI,Iran",
    citycode: "AKW",
    desc: "AKW - AGHAJARI, AGHAJARI,Iran",
},{
    value: "AKY - SITTWE, SITTWE,Myanmar (Burma)",
    citycode: "AKY",
    desc: "AKY - SITTWE, SITTWE,Myanmar (Burma)",
},{
    value: "ALB - ALBANY INTL APT, ALBANY,United States",
    citycode: "ALB",
    desc: "ALB - ALBANY INTL APT, ALBANY,United States",
},{
    value: "ALC - ALICANTE AIRPORT, ALICANTE,Spain",
    citycode: "ALC",
    desc: "ALC - ALICANTE AIRPORT, ALICANTE,Spain",
},{
    value: "ALD - ALERTA, ALERTA,Peru",
    citycode: "ALD",
    desc: "ALD - ALERTA, ALERTA,Peru",
},{
    value: "ALE - ALPINE, ALPINE,United States",
    citycode: "ALE",
    desc: "ALE - ALPINE, ALPINE,United States",
},{
    value: "ALF - ALTA, ALTA,Norway",
    citycode: "ALF",
    desc: "ALF - ALTA, ALTA,Norway",
},{
    value: "ALG - HOUARI BOUMEDIENE, ALGIERS,Algeria",
    citycode: "ALG",
    desc: "ALG - HOUARI BOUMEDIENE, ALGIERS,Algeria",
},{
    value: "ALH - ALBANY, ALBANY,Australia",
    citycode: "ALH",
    desc: "ALH - ALBANY, ALBANY,Australia",
},{
    value: "ALI - ALICE INTL, ALICE,United States",
    citycode: "ALI",
    desc: "ALI - ALICE INTL, ALICE,United States",
},{
    value: "ALJ - KORTDOORN, ALEXANDER BAY,South Africa",
    citycode: "ALJ",
    desc: "ALJ - KORTDOORN, ALEXANDER BAY,South Africa",
},{
    value: "ALK - ASELA, ASELA,Ethiopia",
    citycode: "ALK",
    desc: "ALK - ASELA, ASELA,Ethiopia",
},{
    value: "ALL - ALBENGA, ALBENGA,Italy",
    citycode: "ALL",
    desc: "ALL - ALBENGA, ALBENGA,Italy",
},{
    value: "ALN - ALTON, ALTON,United States",
    citycode: "ALN",
    desc: "ALN - ALTON, ALTON,United States",
},{
    value: "ALO - WATERLOO, WATERLOO,United States",
    citycode: "ALO",
    desc: "ALO - WATERLOO, WATERLOO,United States",
},{
    value: "ALP - INTERNATIONAL, ALEPPO,Syria",
    citycode: "ALP",
    desc: "ALP - INTERNATIONAL, ALEPPO,Syria",
},{
    value: "ALQ - G.MACHADO RAMOS, ALEGRETE,Brazil",
    citycode: "ALQ",
    desc: "ALQ - G.MACHADO RAMOS, ALEGRETE,Brazil",
},{
    value: "ALR - ALEXANDRA, ALEXANDRA,New Zealand",
    citycode: "ALR",
    desc: "ALR - ALEXANDRA, ALEXANDRA,New Zealand",
},{
    value: "ALS - SAN LUIS VALLEY RGNL, ALAMOSA,United States",
    citycode: "ALS",
    desc: "ALS - SAN LUIS VALLEY RGNL, ALAMOSA,United States",
},{
    value: "ALT - ALENQUER, ALENQUER,Brazil",
    citycode: "ALT",
    desc: "ALT - ALENQUER, ALENQUER,Brazil",
},{
    value: "ALU - ALULA, ALULA,Somalia",
    citycode: "ALU",
    desc: "ALU - ALULA, ALULA,Somalia",
},{
    value: "ALX - TC RUSSEL, ALEXANDER CITY,United States",
    citycode: "ALX",
    desc: "ALX - TC RUSSEL, ALEXANDER CITY,United States",
},{
    value: "ALW - REGIONAL, WALLA WALLA,United States",
    citycode: "ALW",
    desc: "ALW - REGIONAL, WALLA WALLA,United States",
},{
    value: "ALZ - ALITAK SPB, ALITAK,United States",
    citycode: "ALZ",
    desc: "ALZ - ALITAK SPB, ALITAK,United States",
},{
    value: "AMB - AMBILOBE, AMBILOBE,Madagascar",
    citycode: "AMB",
    desc: "AMB - AMBILOBE, AMBILOBE,Madagascar",
},{
    value: "AMC - AM TIMAN, AM TIMAN,Chad",
    citycode: "AMC",
    desc: "AMC - AM TIMAN, AM TIMAN,Chad",
},{
    value: "AMD - S.VALLABHBHAI PATEL, AHMEDABAD,India",
    citycode: "AMD",
    desc: "AMD - S.VALLABHBHAI PATEL, AHMEDABAD,India",
},{
    value: "AME - ALTO MOLOCUE, ALTO MOLOCUE,Mozambique",
    citycode: "AME",
    desc: "AME - ALTO MOLOCUE, ALTO MOLOCUE,Mozambique",
},{
    value: "AMF - AMA, AMA,Papua New Guinea",
    citycode: "AMF",
    desc: "AMF - AMA, AMA,Papua New Guinea",
},{
    value: "AMG - AMBOIN, AMBOIN,Papua New Guinea",
    citycode: "AMG",
    desc: "AMG - AMBOIN, AMBOIN,Papua New Guinea",
},{
    value: "AMH - ARBA MINCH, ARBA MINCH,Ethiopia",
    citycode: "AMH",
    desc: "AMH - ARBA MINCH, ARBA MINCH,Ethiopia",
},{
    value: "AMI - SELAPARANG, MATARAM,Indonesia",
    citycode: "AMI",
    desc: "AMI - SELAPARANG, MATARAM,Indonesia",
},{
    value: "AMJ - CIRILO QUEIROZ, ALMENARA,Brazil",
    citycode: "AMJ",
    desc: "AMJ - CIRILO QUEIROZ, ALMENARA,Brazil",
},{
    value: "AMK - ANIMAS AIR PARK, DURANGO,United States",
    citycode: "DRO",
    desc: "AMK - ANIMAS AIR PARK, DURANGO,United States",
},{
    value: "AML - PUERTO ARMUELLES, PUERTO ARMUELLES,Panama",
    citycode: "AML",
    desc: "AML - PUERTO ARMUELLES, PUERTO ARMUELLES,Panama",
},{
    value: "AMN - GRATIOT COMMUNITY, ALMA,United States",
    citycode: "AMN",
    desc: "AMN - GRATIOT COMMUNITY, ALMA,United States",
},{
    value: "AMO - MAO, MAO,Chad",
    citycode: "AMO",
    desc: "AMO - MAO, MAO,Chad",
},{
    value: "AMP - AMPANIHY, AMPANIHY,Madagascar",
    citycode: "AMP",
    desc: "AMP - AMPANIHY, AMPANIHY,Madagascar",
},{
    value: "AMQ - PATTIMURA, AMBON,Indonesia",
    citycode: "AMQ",
    desc: "AMQ - PATTIMURA, AMBON,Indonesia",
},{
    value: "AMS - SCHIPHOL AIRPORT, AMSTERDAM,Netherlands",
    citycode: "AMS",
    desc: "AMS - SCHIPHOL AIRPORT, AMSTERDAM,Netherlands",
},{
    value: "AMT - AMATA, AMATA,Australia",
    citycode: "AMT",
    desc: "AMT - AMATA, AMATA,Australia",
},{
    value: "AMU - AMANAB, AMANAB,Papua New Guinea",
    citycode: "AMU",
    desc: "AMU - AMANAB, AMANAB,Papua New Guinea",
},{
    value: "AMV - AMDERMA, AMDERMA,Russia",
    citycode: "AMV",
    desc: "AMV - AMDERMA, AMDERMA,Russia",
},{
    value: "AMX - AMMAROO, AMMAROO,Australia",
    citycode: "AMX",
    desc: "AMX - AMMAROO, AMMAROO,Australia",
},{
    value: "AMW - AMES, AMES,United States",
    citycode: "AMW",
    desc: "AMW - AMES, AMES,United States",
},{
    value: "AMY - AMBATOMAINTY, AMBATOMAINTY,Madagascar",
    citycode: "AMY",
    desc: "AMY - AMBATOMAINTY, AMBATOMAINTY,Madagascar",
},{
    value: "AMZ - ARDMORE, ARDMORE,New Zealand",
    citycode: "AMZ",
    desc: "AMZ - ARDMORE, ARDMORE,New Zealand",
},{
    value: "ANA - ANAHEIM, ANAHEIM,United States",
    citycode: "ANA",
    desc: "ANA - ANAHEIM, ANAHEIM,United States",
},{
    value: "ANB - COUNTY, ANNISTON,United States",
    citycode: "ANB",
    desc: "ANB - COUNTY, ANNISTON,United States",
},{
    value: "AND - ANDERSON, ANDERSON,United States",
    citycode: "AND",
    desc: "AND - ANDERSON, ANDERSON,United States",
},{
    value: "ANE - MARCE, ANGERS,France",
    citycode: "ANE",
    desc: "ANE - MARCE, ANGERS,France",
},{
    value: "ANF - CERRO MORENO, ANTOFAGASTA,Chile",
    citycode: "ANF",
    desc: "ANF - CERRO MORENO, ANTOFAGASTA,Chile",
},{
    value: "ANG - BRIE-CHAMPNIERS, ANGOULEME,France",
    citycode: "ANG",
    desc: "ANG - BRIE-CHAMPNIERS, ANGOULEME,France",
},{
    value: "ANI - ANIAK, ANIAK,United States",
    citycode: "ANI",
    desc: "ANI - ANIAK, ANIAK,United States",
},{
    value: "ANL - ANDULO, ANDULO,Angola",
    citycode: "ANL",
    desc: "ANL - ANDULO, ANDULO,Angola",
},{
    value: "ANM - ANTSIRABATO, ANTALAHA,Madagascar",
    citycode: "ANM",
    desc: "ANM - ANTSIRABATO, ANTALAHA,Madagascar",
},{
    value: "ANN - ANNETTE ISLAND, ANNETTE ISLAND,United States",
    citycode: "ANN",
    desc: "ANN - ANNETTE ISLAND, ANNETTE ISLAND,United States",
},{
    value: "ANO - ANGOCHE, ANGOCHE,Mozambique",
    citycode: "ANO",
    desc: "ANO - ANGOCHE, ANGOCHE,Mozambique",
},{
    value: "ANP - LEE, ANNAPOLIS,United States",
    citycode: "ANP",
    desc: "ANP - LEE, ANNAPOLIS,United States",
},{
    value: "ANQ - TRI STATE STEUBEN, ANGOLA,United States",
    citycode: "ANQ",
    desc: "ANQ - TRI STATE STEUBEN, ANGOLA,United States",
},{
    value: "ANR - INTERNATIONAL, ANTWERP,Belgium",
    citycode: "ANR",
    desc: "ANR - INTERNATIONAL, ANTWERP,Belgium",
},{
    value: "ANS - ANDAHUAYLAS, ANDAHUAYLAS,Peru",
    citycode: "ANS",
    desc: "ANS - ANDAHUAYLAS, ANDAHUAYLAS,Peru",
},{
    value: "ANU - VC BIRD INTL, ANTIGUA,Antigua and Barbuda",
    citycode: "ANU",
    desc: "ANU - VC BIRD INTL, ANTIGUA,Antigua and Barbuda",
},{
    value: "ANV - ANVIK, ANVIK,United States",
    citycode: "ANV",
    desc: "ANV - ANVIK, ANVIK,United States",
},{
    value: "ANX - ANDOYA, ANDENES,Norway",
    citycode: "ANX",
    desc: "ANX - ANDOYA, ANDENES,Norway",
},{
    value: "ANW - AINSWORTH, AINSWORTH,United States",
    citycode: "ANW",
    desc: "ANW - AINSWORTH, AINSWORTH,United States",
},{
    value: "ANY - ANTHONY, ANTHONY,United States",
    citycode: "ANY",
    desc: "ANY - ANTHONY, ANTHONY,United States",
},{
    value: "ANZ - ANGUS DOWNS STATION, ANGUS DOWNS STATION,Australia",
    citycode: "ANZ",
    desc: "ANZ - ANGUS DOWNS STATION, ANGUS DOWNS STATION,Australia",
},{
    value: "AOA - AROA, AROA,Papua New Guinea",
    citycode: "AOA",
    desc: "AOA - AROA, AROA,Papua New Guinea",
},{
    value: "AOB - ANNANBERG, ANNANBERG,Papua New Guinea",
    citycode: "AOB",
    desc: "AOB - ANNANBERG, ANNANBERG,Papua New Guinea",
},{
    value: "AOC - ALTENBURG NOBITZ, ALTENBURG,Germany",
    citycode: "AOC",
    desc: "AOC - ALTENBURG NOBITZ, ALTENBURG,Germany",
},{
    value: "AOD - ABOU DEIA, ABOU DEIA,Chad",
    citycode: "AOD",
    desc: "AOD - ABOU DEIA, ABOU DEIA,Chad",
},{
    value: "AOE - ANADOLU, ESKISEHIR,Turkey",
    citycode: "ESK",
    desc: "AOE - ANADOLU, ESKISEHIR,Turkey",
},{
    value: "AOG - TENG AO, ANSHAN,China",
    citycode: "AOG",
    desc: "AOG - TENG AO, ANSHAN,China",
},{
    value: "AOH - ALLEN COUNTY, LIMA,United States",
    citycode: "AOH",
    desc: "AOH - ALLEN COUNTY, LIMA,United States",
},{
    value: "AOI - FALCONARA, ANCONA,Italy",
    citycode: "AOI",
    desc: "AOI - FALCONARA, ANCONA,Italy",
},{
    value: "AOJ - AOMORI, AOMORI,Japan",
    citycode: "AOJ",
    desc: "AOJ - AOMORI, AOMORI,Japan",
},{
    value: "AOK - KARPATHOS, KARPATHOS,Greece",
    citycode: "AOK",
    desc: "AOK - KARPATHOS, KARPATHOS,Greece",
},{
    value: "AOL - PASO DE LOS LIBRES, PASO DE LOS LIBRES,Argentina",
    citycode: "AOL",
    desc: "AOL - PASO DE LOS LIBRES, PASO DE LOS LIBRES,Argentina",
},{
    value: "AOM - ADAM, ADAM,Oman",
    citycode: "AOM",
    desc: "AOM - ADAM, ADAM,Oman",
},{
    value: "AON - ARONA, ARONA,Papua New Guinea",
    citycode: "AON",
    desc: "AON - ARONA, ARONA,Papua New Guinea",
},{
    value: "AOO - ALTOONA, ALTOONA,United States",
    citycode: "AOO",
    desc: "AOO - ALTOONA, ALTOONA,United States",
},{
    value: "AOR - SULTAN ABDUL HALIM, ALOR SETAR,Malaysia",
    citycode: "AOR",
    desc: "AOR - SULTAN ABDUL HALIM, ALOR SETAR,Malaysia",
},{
    value: "AOS - SEA PLANE BASE, AMOOK BAY,United States",
    citycode: "AOS",
    desc: "AOS - SEA PLANE BASE, AMOOK BAY,United States",
},{
    value: "AOT - CORRADO GEX AIRPORT, AOSTA,Italy",
    citycode: "AOT",
    desc: "AOT - CORRADO GEX AIRPORT, AOSTA,Italy",
},{
    value: "AOU - ATTAPEU, ATTAPEU,Laos",
    citycode: "AOU",
    desc: "AOU - ATTAPEU, ATTAPEU,Laos",
},{
    value: "APA - CENTENNIAL, DENVER,United States",
    citycode: "DEN",
    desc: "APA - CENTENNIAL, DENVER,United States",
},{
    value: "APB - APOLO, APOLO,Bolivia",
    citycode: "APB",
    desc: "APB - APOLO, APOLO,Bolivia",
},{
    value: "APC - NAPA COUNTY, NAPA,United States",
    citycode: "APC",
    desc: "APC - NAPA COUNTY, NAPA,United States",
},{
    value: "APE - SAN JUAN APOSENTO, SAN JUAN APOSENTO,Peru",
    citycode: "APE",
    desc: "APE - SAN JUAN APOSENTO, SAN JUAN APOSENTO,Peru",
},{
    value: "APF - NAPLES, NAPLES,United States",
    citycode: "APF",
    desc: "APF - NAPLES, NAPLES,United States",
},{
    value: "APG - PHILLIPS AAF, ABERDEEN,United States",
    citycode: "APG",
    desc: "APG - PHILLIPS AAF, ABERDEEN,United States",
},{
    value: "APH - CAMP A P H, BOWLING GREEN,United States",
    citycode: "APH",
    desc: "APH - CAMP A P H, BOWLING GREEN,United States",
},{
    value: "API - LUIS F.GOMEZ NINO AB, APIAY,Colombia",
    citycode: "API",
    desc: "API - LUIS F.GOMEZ NINO AB, APIAY,Colombia",
},{
    value: "APK - APATAKI, APATAKI,French Polynesia",
    citycode: "APK",
    desc: "APK - APATAKI, APATAKI,French Polynesia",
},{
    value: "APL - NAMPULA, NAMPULA,Mozambique",
    citycode: "APL",
    desc: "APL - NAMPULA, NAMPULA,Mozambique",
},{
    value: "APN - COUNTY REGIONAL, ALPENA,United States",
    citycode: "APN",
    desc: "APN - COUNTY REGIONAL, ALPENA,United States",
},{
    value: "APO - CAREPA AR BETANCOURT, APARTADO,Colombia",
    citycode: "APO",
    desc: "APO - CAREPA AR BETANCOURT, APARTADO,Colombia",
},{
    value: "APP - ASAPA, ASAPA,Papua New Guinea",
    citycode: "APP",
    desc: "APP - ASAPA, ASAPA,Papua New Guinea",
},{
    value: "APQ - ARAPIRACA, ARAPIRACA,Brazil",
    citycode: "APQ",
    desc: "APQ - ARAPIRACA, ARAPIRACA,Brazil",
},{
    value: "APR - APRIL RIVER, APRIL RIVER,Papua New Guinea",
    citycode: "APR",
    desc: "APR - APRIL RIVER, APRIL RIVER,Papua New Guinea",
},{
    value: "APS - ANAPOLIS, ANAPOLIS,Brazil",
    citycode: "APS",
    desc: "APS - ANAPOLIS, ANAPOLIS,Brazil",
},{
    value: "APT - MARION COUNTY, JASPER,United States",
    citycode: "APT",
    desc: "APT - MARION COUNTY, JASPER,United States",
},{
    value: "APU - CAPTAIN JOAO BUSSE, APUCARANA,Brazil",
    citycode: "APU",
    desc: "APU - CAPTAIN JOAO BUSSE, APUCARANA,Brazil",
},{
    value: "APV - APPLE VALLEY, APPLE VALLEY,United States",
    citycode: "APV",
    desc: "APV - APPLE VALLEY, APPLE VALLEY,United States",
},{
    value: "APX - ALBERTO BERTELLI, ARAPONGAS,Brazil",
    citycode: "APX",
    desc: "APX - ALBERTO BERTELLI, ARAPONGAS,Brazil",
},{
    value: "APY - ALTO PARNAIBA, ALTO PARNAIBA,Brazil",
    citycode: "APY",
    desc: "APY - ALTO PARNAIBA, ALTO PARNAIBA,Brazil",
},{
    value: "APZ - ZAPALA, ZAPALA,Argentina",
    citycode: "APZ",
    desc: "APZ - ZAPALA, ZAPALA,Argentina",
},{
    value: "AQA - BARTOLOMEU DE GUSMAO, ARARAQUARA,Brazil",
    citycode: "AQA",
    desc: "AQA - BARTOLOMEU DE GUSMAO, ARARAQUARA,Brazil",
},{
    value: "AQB - QUICHE, QUICHE,Guatemala",
    citycode: "AQB",
    desc: "AQB - QUICHE, QUICHE,Guatemala",
},{
    value: "AQG - TIANZHUSHAN, ANQING,China",
    citycode: "AQG",
    desc: "AQG - TIANZHUSHAN, ANQING,China",
},{
    value: "AQI - HAFAR AL BATIN, QAISUMAH,Saudi Arabia",
    citycode: "AQI",
    desc: "AQI - HAFAR AL BATIN, QAISUMAH,Saudi Arabia",
},{
    value: "AQJ - KING HUSSEIN INTL, AQABA,Jordan",
    citycode: "AQJ",
    desc: "AQJ - KING HUSSEIN INTL, AQABA,Jordan",
},{
    value: "AQM - ARIQUEMES, ARIQUEMES,Brazil",
    citycode: "AQM",
    desc: "AQM - ARIQUEMES, ARIQUEMES,Brazil",
},{
    value: "AQP - RODRIGUEZ BALLON INTL, AREQUIPA,Peru",
    citycode: "AQP",
    desc: "AQP - RODRIGUEZ BALLON INTL, AREQUIPA,Peru",
},{
    value: "AQS - SAQANI, SAQANI,Fiji",
    citycode: "AQS",
    desc: "AQS - SAQANI, SAQANI,Fiji",
},{
    value: "AQY - GIRDWOOD, GIRDWOOD,United States",
    citycode: "AQY",
    desc: "AQY - GIRDWOOD, GIRDWOOD,United States",
},{
    value: "ARA - ACADIANA RGNL, NEW IBERIA,United States",
    citycode: "ARA",
    desc: "ARA - ACADIANA RGNL, NEW IBERIA,United States",
},{
    value: "ARB - ANN ARBOR MNPL, ANN ARBOR,United States",
    citycode: "ARB",
    desc: "ARB - ANN ARBOR MNPL, ANN ARBOR,United States",
},{
    value: "ARC - ARCTIC VILLAGE, ARCTIC VILLAGE,United States",
    citycode: "ARC",
    desc: "ARC - ARCTIC VILLAGE, ARCTIC VILLAGE,United States",
},{
    value: "ARD - MALI, ALOR,Indonesia",
    citycode: "ARD",
    desc: "ARD - MALI, ALOR,Indonesia",
},{
    value: "ARE - ANTONIO JUARBE POL, ARECIBO,Puerto Rico",
    citycode: "ARE",
    desc: "ARE - ANTONIO JUARBE POL, ARECIBO,Puerto Rico",
},{
    value: "ARF - ACARICUARA, ACARICUARA,Colombia",
    citycode: "ARF",
    desc: "ARF - ACARICUARA, ACARICUARA,Colombia",
},{
    value: "ARG - WALNUT RIDGE, WALNUT RIDGE,United States",
    citycode: "ARG",
    desc: "ARG - WALNUT RIDGE, WALNUT RIDGE,United States",
},{
    value: "ARH - TALAGI, ARKHANGELSK,Russia",
    citycode: "ARH",
    desc: "ARH - TALAGI, ARKHANGELSK,Russia",
},{
    value: "ARI - CHACALLUTA, ARICA,Chile",
    citycode: "ARI",
    desc: "ARI - CHACALLUTA, ARICA,Chile",
},{
    value: "ARJ - ARSO, ARSO,Indonesia",
    citycode: "ARJ",
    desc: "ARJ - ARSO, ARSO,Indonesia",
},{
    value: "ARK - ARUSHA, ARUSHA,Tanzania",
    citycode: "ARK",
    desc: "ARK - ARUSHA, ARUSHA,Tanzania",
},{
    value: "ARL - ARLY, ARLY,Burkina Faso",
    citycode: "ARL",
    desc: "ARL - ARLY, ARLY,Burkina Faso",
},{
    value: "ARM - ARMIDALE, ARMIDALE,Australia",
    citycode: "ARM",
    desc: "ARM - ARMIDALE, ARMIDALE,Australia",
},{
    value: "ARN - ARLANDA, STOCKHOLM,Sweden",
    citycode: "ARN",
    desc: "ARN - ARLANDA, STOCKHOLM,Sweden",
},{
    value: "ARO - ARBOLETES, ARBOLETES,Colombia",
    citycode: "ARO",
    desc: "ARO - ARBOLETES, ARBOLETES,Colombia",
},{
    value: "ARP - ARAGIP, ARAGIP,Papua New Guinea",
    citycode: "ARP",
    desc: "ARP - ARAGIP, ARAGIP,Papua New Guinea",
},{
    value: "ARQ - EL TRONCAL, ARAUQUITA,Colombia",
    citycode: "ARQ",
    desc: "ARQ - EL TRONCAL, ARAUQUITA,Colombia",
},{
    value: "ARR - ALTO RIO SENGUER, ALTO RIO SENGUER,Argentina",
    citycode: "ARR",
    desc: "ARR - ALTO RIO SENGUER, ALTO RIO SENGUER,Argentina",
},{
    value: "ARS - ARAGARCAS, ARAGARCAS,Brazil",
    citycode: "ARS",
    desc: "ARS - ARAGARCAS, ARAGARCAS,Brazil",
},{
    value: "ART - WATERTOWN, WATERTOWN,United States",
    citycode: "ART",
    desc: "ART - WATERTOWN, WATERTOWN,United States",
},{
    value: "ARU - DARIO GUARITA, ARACATUBA,Brazil",
    citycode: "ARU",
    desc: "ARU - DARIO GUARITA, ARACATUBA,Brazil",
},{
    value: "ARV - NOBLE F LEE, MINOCQUA,United States",
    citycode: "ARV",
    desc: "ARV - NOBLE F LEE, MINOCQUA,United States",
},{
    value: "ARX - ASBURY PARK, ASBURY PARK,United States",
    citycode: "ARX",
    desc: "ARX - ASBURY PARK, ASBURY PARK,United States",
},{
    value: "ARW - ARAD, ARAD,Romania",
    citycode: "ARW",
    desc: "ARW - ARAD, ARAD,Romania",
},{
    value: "ARY - ARARAT, ARARAT,Australia",
    citycode: "ARY",
    desc: "ARY - ARARAT, ARARAT,Australia",
},{
    value: "ARZ - N ZETO, N ZETO,Angola",
    citycode: "ARZ",
    desc: "ARZ - N ZETO, N ZETO,Angola",
},{
    value: "ASA - ASSAB INTERNATIONAL, ASSAB,Eritrea",
    citycode: "ASA",
    desc: "ASA - ASSAB INTERNATIONAL, ASSAB,Eritrea",
},{
    value: "ASB - INTERNATIONAL, ASHGABAT,Turkmenistan",
    citycode: "ASB",
    desc: "ASB - INTERNATIONAL, ASHGABAT,Turkmenistan",
},{
    value: "ASC - ASCENSION, ASCENSION,Bolivia",
    citycode: "ASC",
    desc: "ASC - ASCENSION, ASCENSION,Bolivia",
},{
    value: "ASE - PITKIN COUNTY, ASPEN,United States",
    citycode: "ASE",
    desc: "ASE - PITKIN COUNTY, ASPEN,United States",
},{
    value: "ASF - ASTRAKHAN, ASTRAKHAN,Russia",
    citycode: "ASF",
    desc: "ASF - ASTRAKHAN, ASTRAKHAN,Russia",
},{
    value: "ASG - ASHBURTON, ASHBURTON,New Zealand",
    citycode: "ASG",
    desc: "ASG - ASHBURTON, ASHBURTON,New Zealand",
},{
    value: "ASH - BOIRE FIELD, NASHUA,United States",
    citycode: "ASH",
    desc: "ASH - BOIRE FIELD, NASHUA,United States",
},{
    value: "ASI - RAF STATION, ASCENSION ISLAND,",
    citycode: "ASI",
    desc: "ASI - RAF STATION, ASCENSION ISLAND,",
},{
    value: "ASJ - AMAMI, AMAMI,Japan",
    citycode: "ASJ",
    desc: "ASJ - AMAMI, AMAMI,Japan",
},{
    value: "ASK - YAMOUSSOUKRO, YAMOUSSOUKRO,Cote d Ivoire",
    citycode: "ASK",
    desc: "ASK - YAMOUSSOUKRO, YAMOUSSOUKRO,Cote d Ivoire",
},{
    value: "ASL - HARRISON COUNTY, MARSHALL,United States",
    citycode: "ASL",
    desc: "ASL - HARRISON COUNTY, MARSHALL,United States",
},{
    value: "ASM - ASMARA INTERNATIONAL, ASMARA,Eritrea",
    citycode: "ASM",
    desc: "ASM - ASMARA INTERNATIONAL, ASMARA,Eritrea",
},{
    value: "ASN - TALLADEGA, TALLADEGA,United States",
    citycode: "ASN",
    desc: "ASN - TALLADEGA, TALLADEGA,United States",
},{
    value: "ASO - ASOSA, ASOSA,Ethiopia",
    citycode: "ASO",
    desc: "ASO - ASOSA, ASOSA,Ethiopia",
},{
    value: "ASP - AIRPORT, ALICE SPRINGS,Australia",
    citycode: "ASP",
    desc: "ASP - AIRPORT, ALICE SPRINGS,Australia",
},{
    value: "ASQ - AUSTIN, AUSTIN,United States",
    citycode: "ASQ",
    desc: "ASQ - AUSTIN, AUSTIN,United States",
},{
    value: "ASR - ERKILET, KAYSERI,Turkey",
    citycode: "ASR",
    desc: "ASR - ERKILET, KAYSERI,Turkey",
},{
    value: "ASS - ARATHUSA SAFARI LODGE, ARATHUSA SAFARI LODGE,South Africa",
    citycode: "ASS",
    desc: "ASS - ARATHUSA SAFARI LODGE, ARATHUSA SAFARI LODGE,South Africa",
},{
    value: "AST - REGIONAL, ASTORIA,United States",
    citycode: "AST",
    desc: "AST - REGIONAL, ASTORIA,United States",
},{
    value: "ASU - SILVIO PETTIROSSI INTL, ASUNCION,Paraguay",
    citycode: "ASU",
    desc: "ASU - SILVIO PETTIROSSI INTL, ASUNCION,Paraguay",
},{
    value: "ASV - AMBOSELI, AMBOSELI,Kenya",
    citycode: "ASV",
    desc: "ASV - AMBOSELI, AMBOSELI,Kenya",
},{
    value: "ASX - ASHLAND, ASHLAND,United States",
    citycode: "ASX",
    desc: "ASX - ASHLAND, ASHLAND,United States",
},{
    value: "ASW - ASWAN INTERNATIONAL, ASWAN,Egypt",
    citycode: "ASW",
    desc: "ASW - ASWAN INTERNATIONAL, ASWAN,Egypt",
},{
    value: "ASY - ASHLEY, ASHLEY,United States",
    citycode: "ASY",
    desc: "ASY - ASHLEY, ASHLEY,United States",
},{
    value: "ASZ - ASIRIM, ASIRIM,Papua New Guinea",
    citycode: "ASZ",
    desc: "ASZ - ASIRIM, ASIRIM,Papua New Guinea",
},{
    value: "ATA - GERMAN ARIAS GRAZIANI, HUARAZ,Peru",
    citycode: "ATA",
    desc: "ATA - GERMAN ARIAS GRAZIANI, HUARAZ,Peru",
},{
    value: "ATB - ATBARA, ATBARA,Sudan",
    citycode: "ATB",
    desc: "ATB - ATBARA, ATBARA,Sudan",
},{
    value: "ATD - ATOIFI, ATOIFI,Solomon Islands",
    citycode: "ATD",
    desc: "ATD - ATOIFI, ATOIFI,Solomon Islands",
},{
    value: "ATE - MUNICIPAL, ANTLERS,United States",
    citycode: "ATE",
    desc: "ATE - MUNICIPAL, ANTLERS,United States",
},{
    value: "ATF - CHACHOAN, AMBATO,Ecuador",
    citycode: "ATF",
    desc: "ATF - CHACHOAN, AMBATO,Ecuador",
},{
    value: "ATG - MINHAS, ATTOCK,Pakistan",
    citycode: "ATG",
    desc: "ATG - MINHAS, ATTOCK,Pakistan",
},{
    value: "ATH - ATHENS INT E VENIZELOS, ATHENS,Greece",
    citycode: "ATH",
    desc: "ATH - ATHENS INT E VENIZELOS, ATHENS,Greece",
},{
    value: "ATI - ARTIGAS, ARTIGAS,Uruguay",
    citycode: "ATI",
    desc: "ATI - ARTIGAS, ARTIGAS,Uruguay",
},{
    value: "ATJ - ANTSIRABE, ANTSIRABE,Madagascar",
    citycode: "ATJ",
    desc: "ATJ - ANTSIRABE, ANTSIRABE,Madagascar",
},{
    value: "ATK - E.BURNELL SR MEMORIAL, ATQASUK,United States",
    citycode: "ATK",
    desc: "ATK - E.BURNELL SR MEMORIAL, ATQASUK,United States",
},{
    value: "ATM - ALTAMIRA, ALTAMIRA,Brazil",
    citycode: "ATM",
    desc: "ATM - ALTAMIRA, ALTAMIRA,Brazil",
},{
    value: "ATN - NAMATANAI, NAMATANAI,Papua New Guinea",
    citycode: "ATN",
    desc: "ATN - NAMATANAI, NAMATANAI,Papua New Guinea",
},{
    value: "ATO - OHIO UNIVERSITY, ATHENS,United States",
    citycode: "ATO",
    desc: "ATO - OHIO UNIVERSITY, ATHENS,United States",
},{
    value: "ATP - AITAPE AIRSTRIP, AITAPE,Papua New Guinea",
    citycode: "ATP",
    desc: "ATP - AITAPE AIRSTRIP, AITAPE,Papua New Guinea",
},{
    value: "ATQ - SRI GURU RAM DASS JEE, AMRITSAR,India",
    citycode: "ATQ",
    desc: "ATQ - SRI GURU RAM DASS JEE, AMRITSAR,India",
},{
    value: "ATR - MOUAKCHOTT INTL, ATAR,Mauritania",
    citycode: "ATR",
    desc: "ATR - MOUAKCHOTT INTL, ATAR,Mauritania",
},{
    value: "ATS - MUNICIPAL, ARTESIA,United States",
    citycode: "ATS",
    desc: "ATS - MUNICIPAL, ARTESIA,United States",
},{
    value: "ATT - ATMAUTLUAK, ATMAUTLUAK,United States",
    citycode: "ATT",
    desc: "ATT - ATMAUTLUAK, ATMAUTLUAK,United States",
},{
    value: "ATU - CASCO COVE CGS, ATTU ISLAND,United States",
    citycode: "ATU",
    desc: "ATU - CASCO COVE CGS, ATTU ISLAND,United States",
},{
    value: "ATV - ATI, ATI,Chad",
    citycode: "ATV",
    desc: "ATV - ATI, ATI,Chad",
},{
    value: "ATX - ATBASAR, ATBASAR,Kazakhstan",
    citycode: "ATX",
    desc: "ATX - ATBASAR, ATBASAR,Kazakhstan",
},{
    value: "ATW - OUTAGAMIE CTY, APPLETON,United States",
    citycode: "ATW",
    desc: "ATW - OUTAGAMIE CTY, APPLETON,United States",
},{
    value: "ATY - WATERTOWN, WATERTOWN,United States",
    citycode: "ATY",
    desc: "ATY - WATERTOWN, WATERTOWN,United States",
},{
    value: "ATZ - ASYUT, ASYUT,Egypt",
    citycode: "ATZ",
    desc: "ATZ - ASYUT, ASYUT,Egypt",
},{
    value: "AUA - REINA BEATRIX, ARUBA,Aruba",
    citycode: "AUA",
    desc: "AUA - REINA BEATRIX, ARUBA,Aruba",
},{
    value: "AUC - SANTIAGO PEREZ QUIROZ, ARAUCA,Colombia",
    citycode: "AUC",
    desc: "AUC - SANTIAGO PEREZ QUIROZ, ARAUCA,Colombia",
},{
    value: "AUD - AUGUSTUS DOWNS, AUGUSTUS DOWNS,Australia",
    citycode: "AUD",
    desc: "AUD - AUGUSTUS DOWNS, AUGUSTUS DOWNS,Australia",
},{
    value: "AUE - ABU RUDEIS, ABU RUDEIS,Egypt",
    citycode: "AUE",
    desc: "AUE - ABU RUDEIS, ABU RUDEIS,Egypt",
},{
    value: "AUF - BRANCHES, AUXERRE,France",
    citycode: "AUF",
    desc: "AUF - BRANCHES, AUXERRE,France",
},{
    value: "AUG - AUGUSTA, AUGUSTA,United States",
    citycode: "AUG",
    desc: "AUG - AUGUSTA, AUGUSTA,United States",
},{
    value: "AUI - AUA ISLAND, AUA ISLAND,Papua New Guinea",
    citycode: "AUI",
    desc: "AUI - AUA ISLAND, AUA ISLAND,Papua New Guinea",
},{
    value: "AUJ - AMBUNTI, AMBUNTI,Papua New Guinea",
    citycode: "AUJ",
    desc: "AUJ - AMBUNTI, AMBUNTI,Papua New Guinea",
},{
    value: "AUK - ALAKANUK, ALAKANUK,United States",
    citycode: "AUK",
    desc: "AUK - ALAKANUK, ALAKANUK,United States",
},{
    value: "AUL - AUR ISLAND, AUR ISLAND,Marshall Islands",
    citycode: "AUL",
    desc: "AUL - AUR ISLAND, AUR ISLAND,Marshall Islands",
},{
    value: "AUM - AUSTIN, AUSTIN,United States",
    citycode: "AUM",
    desc: "AUM - AUSTIN, AUSTIN,United States",
},{
    value: "AUN - MUNICIPAL, AUBURN,United States",
    citycode: "AUN",
    desc: "AUN - MUNICIPAL, AUBURN,United States",
},{
    value: "AUO - AUBURN OPELIKA, AUBURN,United States",
    citycode: "AUO",
    desc: "AUO - AUBURN OPELIKA, AUBURN,United States",
},{
    value: "AUP - AGAUN, AGAUN,Papua New Guinea",
    citycode: "AUP",
    desc: "AUP - AGAUN, AGAUN,Papua New Guinea",
},{
    value: "AUQ - ATUONA, HIVA OA,French Polynesia",
    citycode: "AUQ",
    desc: "AUQ - ATUONA, HIVA OA,French Polynesia",
},{
    value: "AUR - AURILLAC, AURILLAC,France",
    citycode: "AUR",
    desc: "AUR - AURILLAC, AURILLAC,France",
},{
    value: "AUS - BERGSTROM INTL, AUSTIN,United States",
    citycode: "AUS",
    desc: "AUS - BERGSTROM INTL, AUSTIN,United States",
},/*{
  value: "AUT - ATAURO, ATAURO,",
    citycode: "AUT",
    desc: "AUT - ATAURO, ATAURO,",
},*/{
    value: "AUU - AURUKUN, AURUKUN,Australia",
    citycode: "AUU",
    desc: "AUU - AURUKUN, AURUKUN,Australia",
},{
    value: "AUV - AUMO, AUMO,Papua New Guinea",
    citycode: "AUV",
    desc: "AUV - AUMO, AUMO,Papua New Guinea",
},{
    value: "AUX - ARAGUAINA, ARAGUAINA,Brazil",
    citycode: "AUX",
    desc: "AUX - ARAGUAINA, ARAGUAINA,Brazil",
},{
    value: "AUY - ANATOM ISLAND, ANATOM ISLAND,Vanuatu",
    citycode: "AUY",
    desc: "AUY - ANATOM ISLAND, ANATOM ISLAND,Vanuatu",
},{
    value: "AUZ - AURORA MNPL, AURORA,United States",
    citycode: "AUZ",
    desc: "AUZ - AURORA MNPL, AURORA,United States",
},{
    value: "AVA - HUNAGGUOSHU, ANSHUN,China",
    citycode: "AVA",
    desc: "AVA - HUNAGGUOSHU, ANSHUN,China",
},{
    value: "AVB - AIR BASE, AVIANO,Italy",
    citycode: "AVB",
    desc: "AVB - AIR BASE, AVIANO,Italy",
},{
    value: "AVG - AUVERGNE STATION, AUVERGNE STATION,Australia",
    citycode: "AVG",
    desc: "AVG - AUVERGNE STATION, AUVERGNE STATION,Australia",
},{
    value: "AVI - MAXIMO GOMEZ, CIEGO DE AVILA,Cuba",
    citycode: "AVI",
    desc: "AVI - MAXIMO GOMEZ, CIEGO DE AVILA,Cuba",
},{
    value: "AVK - ARVAIKHEER, ARVAIKHEER,Mongolia",
    citycode: "AVK",
    desc: "AVK - ARVAIKHEER, ARVAIKHEER,Mongolia",
},{
    value: "AVL - ASHEVILLE REGIONAL APT, ASHEVILLE,United States",
    citycode: "AVL",
    desc: "AVL - ASHEVILLE REGIONAL APT, ASHEVILLE,United States",
},{
    value: "AVN - CAUMONT, AVIGNON,France",
    citycode: "AVN",
    desc: "AVN - CAUMONT, AVIGNON,France",
},{
    value: "AVO - AVON PARK MNPL, AVON PARK,United States",
    citycode: "AVO",
    desc: "AVO - AVON PARK MNPL, AVON PARK,United States",
},{
    value: "AVU - AVU AVU, AVU AVU,Solomon Islands",
    citycode: "AVU",
    desc: "AVU - AVU AVU, AVU AVU,Solomon Islands",
},{
    value: "AVV - AVALON, MELBOURNE,Australia",
    citycode: "MEL",
    desc: "AVV - AVALON, MELBOURNE,Australia",
},{
    value: "AVW - MARANA REGIONAL, TUCSON,United States",
    citycode: "TUS",
    desc: "AVW - MARANA REGIONAL, TUCSON,United States",
},{
    value: "AXA - CLAYTON J.LLOYD INTL, ANGUILLA,Anguilla",
    citycode: "AXA",
    desc: "AXA - CLAYTON J.LLOYD INTL, ANGUILLA,Anguilla",
},{
    value: "AXB - ALEXANDRIA BAY, ALEXANDRIA BAY,United States",
    citycode: "AXB",
    desc: "AXB - ALEXANDRIA BAY, ALEXANDRIA BAY,United States",
},{
    value: "AXC - ARAMAC, ARAMAC,Australia",
    citycode: "AXC",
    desc: "AXC - ARAMAC, ARAMAC,Australia",
},{
    value: "AXD - DIMOKRITOS, ALEXANDROUPOLIS,Greece",
    citycode: "AXD",
    desc: "AXD - DIMOKRITOS, ALEXANDROUPOLIS,Greece",
},{
    value: "AXE - JOAO WINCKLER, XANXERE,Brazil",
    citycode: "AXE",
    desc: "AXE - JOAO WINCKLER, XANXERE,Brazil",
},{
    value: "AXF - ALXA LEFT BANNER, ALXA LEFT BANNER,China",
    citycode: "AXF",
    desc: "AXF - ALXA LEFT BANNER, ALXA LEFT BANNER,China",
},{
    value: "AXG - ALGONA, ALGONA,United States",
    citycode: "AXG",
    desc: "AXG - ALGONA, ALGONA,United States",
},{
    value: "AXJ - AMAKUSA, AMAKUSA,Japan",
    citycode: "AXJ",
    desc: "AXJ - AMAKUSA, AMAKUSA,Japan",
},{
    value: "AXK - ATAQ, ATAQ,Yemen",
    citycode: "AXK",
    desc: "AXK - ATAQ, ATAQ,Yemen",
},{
    value: "AXL - ALEXANDRIA STATION, ALEXANDRIA STATION,Australia",
    citycode: "AXL",
    desc: "AXL - ALEXANDRIA STATION, ALEXANDRIA STATION,Australia",
},{
    value: "AXM - EL EDEN INTL, ARMENIA,Colombia",
    citycode: "AXM",
    desc: "AXM - EL EDEN INTL, ARMENIA,Colombia",
},{
    value: "AXN - ALEXANDRIA, ALEXANDRIA,United States",
    citycode: "AXN",
    desc: "AXN - ALEXANDRIA, ALEXANDRIA,United States",
},{
    value: "AXR - ARUTUA, ARUTUA,French Polynesia",
    citycode: "AXR",
    desc: "AXR - ARUTUA, ARUTUA,French Polynesia",
},{
    value: "AXS - QUARTZ MOUNTAIN RGNL, ALTUS,United States",
    citycode: "LTS",
    desc: "AXS - QUARTZ MOUNTAIN RGNL, ALTUS,United States",
},{
    value: "AXT - AKITA, AKITA,Japan",
    citycode: "AXT",
    desc: "AXT - AKITA, AKITA,Japan",
},{
    value: "AXU - AXUM, AXUM,Ethiopia",
    citycode: "AXU",
    desc: "AXU - AXUM, AXUM,Ethiopia",
},{
    value: "AXV - NEIL ARMSTRON, WAPAKONETA,United States",
    citycode: "AXV",
    desc: "AXV - NEIL ARMSTRON, WAPAKONETA,United States",
},{
    value: "AXX - ANGEL FIRE, ANGEL FIRE,United States",
    citycode: "AXX",
    desc: "AXX - ANGEL FIRE, ANGEL FIRE,United States",
},{
    value: "AWA - AWASA, AWASA,Ethiopia",
    citycode: "AWA",
    desc: "AWA - AWASA, AWASA,Ethiopia",
},{
    value: "AWB - AWABA, AWABA,Papua New Guinea",
    citycode: "AWB",
    desc: "AWB - AWABA, AWABA,Papua New Guinea",
},{
    value: "AWD - ANIWA ISLAND, ANIWA ISLAND,Vanuatu",
    citycode: "AWD",
    desc: "AWD - ANIWA ISLAND, ANIWA ISLAND,Vanuatu",
},{
    value: "AWE - ALOWE, ALOWE,Gabon",
    citycode: "AWE",
    desc: "AWE - ALOWE, ALOWE,Gabon",
},{
    value: "AWK - WAKE ISLAND, WAKE ISLAND,",
    citycode: "AWK",
    desc: "AWK - WAKE ISLAND, WAKE ISLAND,",
},{
    value: "AWM - WEST MEMPHIS MNPL, WEST MEMPHIS,United States",
    citycode: "AWM",
    desc: "AWM - WEST MEMPHIS MNPL, WEST MEMPHIS,United States",
},{
    value: "AWN - ALTON DOWNS, ALTON DOWNS,Australia",
    citycode: "AWN",
    desc: "AWN - ALTON DOWNS, ALTON DOWNS,Australia",
},{
    value: "AWP - AUSTRAL DOWNS STATION, AUSTRAL DOWNS STATION,Australia",
    citycode: "AWP",
    desc: "AWP - AUSTRAL DOWNS STATION, AUSTRAL DOWNS STATION,Australia",
},{
    value: "AWR - AWAR, AWAR,Papua New Guinea",
    citycode: "AWR",
    desc: "AWR - AWAR, AWAR,Papua New Guinea",
},{
    value: "AWZ - AHWAZ, AHWAZ,Iran",
    citycode: "AWZ",
    desc: "AWZ - AHWAZ, AHWAZ,Iran",
},{
    value: "AYA - EL CEBRUNO, AYAPEL,Colombia",
    citycode: "AYA",
    desc: "AYA - EL CEBRUNO, AYAPEL,Colombia",
},{
    value: "AYC - LA GLORIA, AYACUCHO,Colombia",
    citycode: "AYC",
    desc: "AYC - LA GLORIA, AYACUCHO,Colombia",
},{
    value: "AYD - ALROY DOWNS, ALROY DOWNS,Australia",
    citycode: "AYD",
    desc: "AYD - ALROY DOWNS, ALROY DOWNS,Australia",
},{
    value: "AYG - YAGUARA II, YAGUARA II,Colombia",
    citycode: "AYG",
    desc: "AYG - YAGUARA II, YAGUARA II,Colombia",
},{
    value: "AYI - YARI, YARI,Colombia",
    citycode: "AYI",
    desc: "AYI - YARI, YARI,Colombia",
},{
    value: "AYK - ARKALYK, ARKALYK,Kazakhstan",
    citycode: "AYK",
    desc: "AYK - ARKALYK, ARKALYK,Kazakhstan",
},{
    value: "AYL - ANTHONY LAGOON, ANTHONY LAGOON,Australia",
    citycode: "AYL",
    desc: "AYL - ANTHONY LAGOON, ANTHONY LAGOON,Australia",
},{
    value: "AYM - YAS ISLAND SPB, ABU DHABI,United Arab Emirates",
    citycode: "AUH",
    desc: "AYM - YAS ISLAND SPB, ABU DHABI,United Arab Emirates",
},{
    value: "AYN - ANYANG, ANYANG,China",
    citycode: "AYN",
    desc: "AYN - ANYANG, ANYANG,China",
},{
    value: "AYO - JUAN DE AYOLAS, AYOLAS,Paraguay",
    citycode: "AYO",
    desc: "AYO - JUAN DE AYOLAS, AYOLAS,Paraguay",
},{
    value: "AYP - ALFREDO M DUARTE, AYACUCHO,Peru",
    citycode: "AYP",
    desc: "AYP - ALFREDO M DUARTE, AYACUCHO,Peru",
},{
    value: "AYQ - CONNELLAN, AYERS ROCK,Australia",
    citycode: "AYQ",
    desc: "AYQ - CONNELLAN, AYERS ROCK,Australia",
},{
    value: "AYR - AYR, AYR,Australia",
    citycode: "AYR",
    desc: "AYR - AYR, AYR,Australia",
},{
    value: "AYS - WARE COUNTY, WAYCROSS,United States",
    citycode: "AYS",
    desc: "AYS - WARE COUNTY, WAYCROSS,United States",
},{
    value: "AYT - ANTALYA, ANTALYA,Turkey",
    citycode: "AYT",
    desc: "AYT - ANTALYA, ANTALYA,Turkey",
},{
    value: "AYU - AIYURA, AIYURA,Papua New Guinea",
    citycode: "AYU",
    desc: "AYU - AIYURA, AIYURA,Papua New Guinea",
},{
    value: "AYW - AYAWASI, AYAWASI,Indonesia",
    citycode: "AYW",
    desc: "AYW - AYAWASI, AYAWASI,Indonesia",
},{
    value: "AYY - ARUGAM BAY SPB, POTTUVIL,Sri Lanka",
    citycode: "AYY",
    desc: "AYY - ARUGAM BAY SPB, POTTUVIL,Sri Lanka",
},{
    value: "AYZ - ZAHNS, AMITYVILLE,United States",
    citycode: "AYZ",
    desc: "AYZ - ZAHNS, AMITYVILLE,United States",
},{
    value: "AZA - MESA GATEWAY, PHOENIX,United States",
    citycode: "AZA",
    desc: "AZA - MESA GATEWAY, PHOENIX,United States",
},{
    value: "AZB - AMAZON BAY, AMAZON BAY,Papua New Guinea",
    citycode: "AZB",
    desc: "AZB - AMAZON BAY, AMAZON BAY,Papua New Guinea",
},{
    value: "AZD - SHAHID SADOOGHI, YAZD,Iran",
    citycode: "AZD",
    desc: "AZD - SHAHID SADOOGHI, YAZD,Iran",
},{
    value: "AZG - PABLO L. SIDAR, APATZINGAN,Mexico",
    citycode: "AZG",
    desc: "AZG - PABLO L. SIDAR, APATZINGAN,Mexico",
},{
    value: "AZI - BATEEN, ABU DHABI,United Arab Emirates",
    citycode: "AUH",
    desc: "AZI - BATEEN, ABU DHABI,United Arab Emirates",
},{
    value: "AZL - FAZENDA TUCUNARE, SAPEZAL,Brazil",
    citycode: "AZL",
    desc: "AZL - FAZENDA TUCUNARE, SAPEZAL,Brazil",
},{
    value: "AZN - ANDIZHAN, ANDIZHAN,Uzbekistan",
    citycode: "AZN",
    desc: "AZN - ANDIZHAN, ANDIZHAN,Uzbekistan",
},{
    value: "AZO - BATTLE CREEK, KALAMAZOO,United States",
    citycode: "AZO",
    desc: "AZO - BATTLE CREEK, KALAMAZOO,United States",
},{
    value: "AZP - ATIZAPAN-JIMENEZ CANTU, MEXICO CITY,Mexico",
    citycode: "MEX",
    desc: "AZP - ATIZAPAN-JIMENEZ CANTU, MEXICO CITY,Mexico",
},{
    value: "AZR - TOUAT, ADRAR,Algeria",
    citycode: "AZR",
    desc: "AZR - TOUAT, ADRAR,Algeria",
},{
    value: "AZT - ZAPATOCA, ZAPATOCA,Colombia",
    citycode: "AZT",
    desc: "AZT - ZAPATOCA, ZAPATOCA,Colombia",
},{
    value: "AZZ - AMBRIZ, AMBRIZ,Angola",
    citycode: "AZZ",
    desc: "AZZ - AMBRIZ, AMBRIZ,Angola",
},{
    value: "BAA - BIALLA, BIALLA,Papua New Guinea",
    citycode: "BAA",
    desc: "BAA - BIALLA, BIALLA,Papua New Guinea",
},{
    value: "BAB - BEALE AFB, MARYSVILLE,United States",
    citycode: "MYV",
    desc: "BAB - BEALE AFB, MARYSVILLE,United States",
},{
    value: "BAC - GUADALITO, BARRANCA DE UPIA,Colombia",
    citycode: "BAC",
    desc: "BAC - GUADALITO, BARRANCA DE UPIA,Colombia",
},{
    value: "BAD - BARKSDALE AFB, SHREVEPORT,United States",
    citycode: "SHV",
    desc: "BAD - BARKSDALE AFB, SHREVEPORT,United States",
},{
    value: "BAE - SAINT PONS, BARCELONNETTE,France",
    citycode: "BAE",
    desc: "BAE - SAINT PONS, BARCELONNETTE,France",
},{
    value: "BAF - BARNES, WESTFIELD,United States",
    citycode: "BAF",
    desc: "BAF - BARNES, WESTFIELD,United States",
},{
    value: "BAG - LOAKAN, BAGUIO,Philippines",
    citycode: "BAG",
    desc: "BAG - LOAKAN, BAGUIO,Philippines",
},{
    value: "BAH - BAHRAIN INTL, BAHRAIN,Bahrain",
    citycode: "BAH",
    desc: "BAH - BAHRAIN INTL, BAHRAIN,Bahrain",
},{
    value: "BAI - BUENOS AIRES, BUENOS AIRES,Costa Rica",
    citycode: "BAI",
    desc: "BAI - BUENOS AIRES, BUENOS AIRES,Costa Rica",
},{
    value: "BAJ - BALI, BALI,Papua New Guinea",
    citycode: "BAJ",
    desc: "BAJ - BALI, BALI,Papua New Guinea",
},{
    value: "BAL - BATMAN, BATMAN,Turkey",
    citycode: "BAL",
    desc: "BAL - BATMAN, BATMAN,Turkey",
},{
    value: "BAM - BATTLE MOUNTAIN, BATTLE MOUNTAIN,United States",
    citycode: "BAM",
    desc: "BAM - BATTLE MOUNTAIN, BATTLE MOUNTAIN,United States",
},/*{
    value: "BAN - BASONGO, BASONGO,",
    citycode: "BAN",
    desc: "BAN - BASONGO, BASONGO,",
},*/{
    value: "BAP - BAIBARA, BAIBARA,Papua New Guinea",
    citycode: "BAP",
    desc: "BAP - BAIBARA, BAIBARA,Papua New Guinea",
},{
    value: "BAQ - ERNESTO CORTISSOZ INTL, BARRANQUILLA,Colombia",
    citycode: "BAQ",
    desc: "BAQ - ERNESTO CORTISSOZ INTL, BARRANQUILLA,Colombia",
},{
    value: "BAR - BAKER AAF, BAKER ISLAND,United States",
    citycode: "BAR",
    desc: "BAR - BAKER AAF, BAKER ISLAND,United States",
},{
    value: "BAS - BALALAE, BALALAE,Solomon Islands",
    citycode: "BAS",
    desc: "BAS - BALALAE, BALALAE,Solomon Islands",
},{
    value: "BAT - CHAFEI AMSEI, BARRETOS,Brazil",
    citycode: "BAT",
    desc: "BAT - CHAFEI AMSEI, BARRETOS,Brazil",
},{
    value: "BAV - ERLIBAN, BAOTOU,China",
    citycode: "BAV",
    desc: "BAV - ERLIBAN, BAOTOU,China",
},{
    value: "BAX - BARNAUL, BARNAUL,Russia",
    citycode: "BAX",
    desc: "BAX - BARNAUL, BARNAUL,Russia",
},{
    value: "BAW - BIAWONQUE, BIAWONQUE,Gabon",
    citycode: "BAW",
    desc: "BAW - BIAWONQUE, BIAWONQUE,Gabon",
},{
    value: "BAY - BAIA MARE, BAIA MARE,Romania",
    citycode: "BAY",
    desc: "BAY - BAIA MARE, BAIA MARE,Romania",
},{
    value: "BAZ - BARCELOS, BARCELOS,Brazil",
    citycode: "BAZ",
    desc: "BAZ - BARCELOS, BARCELOS,Brazil",
},{
    value: "BBA - BALMACEDA, BALMACEDA,Chile",
    citycode: "BBA",
    desc: "BBA - BALMACEDA, BALMACEDA,Chile",
},{
    value: "BBB - BENSON MNPL, BENSON,United States",
    citycode: "BBB",
    desc: "BBB - BENSON MNPL, BENSON,United States",
},{
    value: "BBC - BAY CITY, BAY CITY,United States",
    citycode: "BBC",
    desc: "BBC - BAY CITY, BAY CITY,United States",
},{
    value: "BBD - CURTIS FIELD, BRADY,United States",
    citycode: "BBD",
    desc: "BBD - CURTIS FIELD, BRADY,United States",
},{
    value: "BBF - BURLINGTON, BURLINGTON,United States",
    citycode: "BBF",
    desc: "BBF - BURLINGTON, BURLINGTON,United States",
},{
    value: "BBG - BUTARITARI, BUTARITARI,Kiribati",
    citycode: "BBG",
    desc: "BBG - BUTARITARI, BUTARITARI,Kiribati",
},{
    value: "BBH - BARTH, STRALSUND,Germany",
    citycode: "BBH",
    desc: "BBH - BARTH, STRALSUND,Germany",
},{
    value: "BBI - BIJU PATNAIK, BHUBANESHWAR,India",
    citycode: "BBI",
    desc: "BBI - BIJU PATNAIK, BHUBANESHWAR,India",
},{
    value: "BBK - KASANE, KASANE,Botswana",
    citycode: "BBK",
    desc: "BBK - KASANE, KASANE,Botswana",
},{
    value: "BBL - BALLERA, BALLERA,Australia",
    citycode: "BBL",
    desc: "BBL - BALLERA, BALLERA,Australia",
},{
    value: "BBM - BATTAMBANG, BATTAMBANG,Cambodia",
    citycode: "BBM",
    desc: "BBM - BATTAMBANG, BATTAMBANG,Cambodia",
},{
    value: "BBN - BARIO, BARIO,Malaysia",
    citycode: "BBN",
    desc: "BBN - BARIO, BARIO,Malaysia",
},{
    value: "BBO - BERBERA, BERBERA,Somalia",
    citycode: "BBO",
    desc: "BBO - BERBERA, BERBERA,Somalia",
},{
    value: "BBP - BEMBRIDGE, BEMBRIDGE,United Kingdom",
    citycode: "BBP",
    desc: "BBP - BEMBRIDGE, BEMBRIDGE,United Kingdom",
},{
    value: "BBQ - CODRINGTON, BARBUDA,Antigua and Barbuda",
    citycode: "BBQ",
    desc: "BBQ - CODRINGTON, BARBUDA,Antigua and Barbuda",
},{
    value: "BBR - BAILLIF, BASSE TERRE,Guadeloupe",
    citycode: "BBR",
    desc: "BBR - BAILLIF, BASSE TERRE,Guadeloupe",
},
{
    value: "UAB - INCIRLIK AB, ADANA,Turkey",
    citycode: "ADA",
    desc: "UAB - INCIRLIK AB, ADANA,Turkey",
},{
    value: "ADA - SAKIRPASA, ADANA,Turkey",
    citycode: "ADA",
    desc: "ADA - SAKIRPASA, ADANA,Turkey",
},{
    value: "AHD - DOWNTOWN EXECUTIVE, ARDMORE, United States",
    citycode: "ADM",
    desc: "AHD - DOWNTOWN EXECUTIVE, ARDMORE, United States",
},{
    value: "ADM - MUNICIPAL, ARDMORE, United States",
    citycode: "ADM",
    desc: "ADM - MUNICIPAL, ARDMORE, United States",
},{
    value: "ADP - GAL OYA, AMPARA, Sri Lanka",
    citycode: "ADP",
    desc: "ADP - GAL OYA, AMPARA, Sri Lanka",
},{
    value: "AFK - KONDAVATTAVAN TANK SPB, AMPARA, Sri Lanka",
    citycode: "ADP",
    desc: "AFK - KONDAVATTAVAN TANK SPB, AMPARA, Sri Lanka",
},{
    value: "ADQ - KODIAK AIRPORT, KODIAK, United States",
    citycode: "ADQ",
    desc: "ADQ - KODIAK AIRPORT, KODIAK, United States",
},{
    value: "KDK - KODIAK MNPL, KODIAK, United States",
    citycode: "ADQ",
    desc: "KDK - KODIAK MNPL, KODIAK, United States",
},{
    value: "ADW - ANDREWS AFB, CAMP SPRINGS, United States",
    citycode: "ADW",
    desc: "ADW - ANDREWS AFB, CAMP SPRINGS, United States",
},{
    value: "NSF - ANDREWS NAF, CAMP SPRINGS, United States",
    citycode: "ADW",
    desc: "NSF - ANDREWS NAF, CAMP SPRINGS, United States",
},{
    value: "AEX - ALEXANDRIA INTL, ALEXANDRIA, United States",
    citycode: "AEX",
    desc: "AEX - ALEXANDRIA INTL, ALEXANDRIA, United States",
},{
    value: "ESF - ESLER FIELD, ALEXANDRIA, United States",
    citycode: "AEX",
    desc: "ESF - ESLER FIELD, ALEXANDRIA, United States",
},{
    value: "AGS - BUSH FIELD, AUGUSTA, United States",
    citycode: "AGS",
    desc: "AGS - BUSH FIELD, AUGUSTA, United States",
},{
    value: "DNL - DANIEL, AUGUSTA, United States",
    citycode: "AGS",
    desc: "DNL - DANIEL, AUGUSTA, United States",
},{
    value: "ACY - ATLANTIC CITY INTL, ATLANTIC CITY, United States",
    citycode: "AIY",
    desc: "ACY - ATLANTIC CITY INTL, ATLANTIC CITY, United States",
},{
    value: "AIY - BADER FIEL, ATLANTIC CITY, United States",
    citycode: "AIY",
    desc: "AIY - BADER FIEL, ATLANTIC CITY, United States",
},{
    value: "BXJ - BOROLDAY, ALMATY, Kazakhstan",
    citycode: "ALA",
    desc: "BXJ - BOROLDAY, ALMATY, Kazakhstan",
},{
    value: "ALA - INTERNATIONAL, ALMATY, Kazakhstan",
    citycode: "ALA",
    desc: "ALA - INTERNATIONAL, ALMATY, Kazakhstan",
},{
    value: "HMN - HOLLOMAN AFB, ALAMOGORDO, United States",
    citycode: "ALM",
    desc: "HMN - HOLLOMAN AFB, ALAMOGORDO, United States",
},{
    value: "ALM - WHITE SANDS REGIONAL, ALAMOGORDO, United States",
    citycode: "ALM",
    desc: "ALM - WHITE SANDS REGIONAL, ALAMOGORDO, United States",
},{
    value: "HBE - BORG EL ARAB, ALEXANDRIA, Egypt",
    citycode: "ALY",
    desc: "HBE - BORG EL ARAB, ALEXANDRIA, Egypt",
},{
    value: "ALY - EL NOUZHA, ALEXANDRIA, Egypt",
    citycode: "ALY",
    desc: "ALY - EL NOUZHA, ALEXANDRIA, Egypt",
},{
    value: "AMA - AMARILLO INTL, AMARILLO, United States",
    citycode: "AMA",
    desc: "AMA - AMARILLO INTL, AMARILLO, United States",
},{
    value: "TDW - TRADEWIND, AMARILLO, United States",
    citycode: "AMA",
    desc: "TDW - TRADEWIND, AMARILLO, United States",
},{
    value: "ADJ - MARKA INTL, AMMAN, Jordan",
    citycode: "AMM",
    desc: "ADJ - MARKA INTL, AMMAN, Jordan",
},{
    value: "AMM - QUEEN ALIA, AMMAN, Jordan",
    citycode: "AMM",
    desc: "AMM - QUEEN ALIA, AMMAN, Jordan",
},{
    value: "ESB - ESENBOGA, ANKARA, Turkey",
    citycode: "ANK",
    desc: "ESB - ESENBOGA, ANKARA, Turkey",
},{
    value: "ANK - ETIMESGUT, ANKARA, Turkey",
    citycode: "ANK",
    desc: "ANK - ETIMESGUT, ANKARA, Turkey",
},{
    value: "FGI - FAGALI I, APIA, Western Samoa",
    citycode: "APW",
    desc: "FGI - FAGALI I, APIA, Western Samoa",
},{
    value: "APW - FALEOLO INTL, APIA, Western Samoa",
    citycode: "APW",
    desc: "APW - FALEOLO INTL, APIA, Western Samoa",
},{
    value: "CWA - CENTRAL WISCONSIN, WAUSAU, United States",
    citycode: "AUW",
    desc: "CWA - CENTRAL WISCONSIN, WAUSAU, United States",
},{
    value: "AUW - WAUSAU MNPL, WAUSAU, United States",
    citycode: "AUW",
    desc: "AUW - WAUSAU MNPL, WAUSAU, United States",
},{
    value: "CIB - APT IN THE SKY, AVALON, United States",
    citycode: "AVX",
    desc: "CIB - APT IN THE SKY, AVALON, United States",
},{
    value: "AVX - CATALINA, AVALON, United States",
    citycode: "AVX",
    desc: "AVX - CATALINA, AVALON, United States",
},{
    value: "AZS - EL CATEY INTL, SAMANA, Dominican Republic",
    citycode: "AZS",
    desc: "AAZS - EL CATEY INTL, SAMANA, Dominican Republic",
},{
    value: "EPS - EL PORTILLO AIRPORT, SAMANA, Dominican Republic",
    citycode: "AZS",
    desc: "EPS - EL PORTILLO AIRPORT, SAMANA, Dominican Republic",
},{
    value: "GYD - HEYDAR ALIYEV INTL, BAKU, Azerbaijan",
    citycode: "BAK",
    desc: "GYD - HEYDAR ALIYEV INTL, BAKU, Azerbaijan",
},{
    value: "ZXT - ZABRAT AIRPORT, BAKU, Azerbaijan",
    citycode: "BAK",
    desc: "ZXT - ZABRAT AIRPORT, BAKU, Azerbaijan",
},{
    value: "BJY - BATAJNICA, BELGRADE",
    citycode: "BEG",
    desc: "BJY - BATAJNICA, BELGRADE",
},{
    value: "BEG - NIKOLA TESLA, BELGRADE",
    citycode: "BEG",
    desc: "BEG - NIKOLA TESLA, BELGRADE",
},{
    value: "BET - BETHEL AIRPORT, BETHEL, United States",
    citycode: "BET",
    desc: "BET - BETHEL AIRPORT, BETHEL, United States",
},{
    value: "JBT - SEA PLANE BASE, BETHEL, United States",
    citycode: "BET",
    desc: "JBT - SEA PLANE BASE, BETHEL, United States",
},{
    value: "BHD - GEORGE BEST CITY APT, BELFAST, United Kingdom",
    citycode: "BFS",
    desc: "BHD - GEORGE BEST CITY APT, BELFAST, United Kingdom",
},{
    value: "BFS - INTERNATIONAL, BELFAST, United Kingdom",
    citycode: "BFS",
    desc: "BFS - INTERNATIONAL, BELFAST, United Kingdom",
},{
    value: "PLU - PAMPULHA, BELO HORIZONTE, Brazil",
    citycode: "BHZ",
    desc: "PLU - PAMPULHA, BELO HORIZONTE, Brazil",
},{
    value: "CNF - TANCREDO NEVES INTL, BELO HORIZONTE, Brazil",
    citycode: "BHZ",
    desc: "CNF - TANCREDO NEVES INTL, BELO HORIZONTE, Brazil",
},{
    value: "PEK - CAPITAL INTL, BEIJING, China",
    citycode: "BJS",
    desc: "PEK - CAPITAL INTL, BEIJING, China",
},{
    value: "NAY - NANYUAN APT, BEIJING, China",
    citycode: "BJS",
    desc: "NAY - NANYUAN APT, BEIJING, China",
},{
    value: "DMK - DON MUEANG INTL, BANGKOK, Thailand",
    citycode: "BKK",
    desc: "DMK - DON MUEANG INTL, BANGKOK, Thailand",
},{
    value: "BKK - SUVARNABHUMI INTL, BANGKOK, Thailand",
    citycode: "BKK",
    desc: "BKK - SUVARNABHUMI INTL, BANGKOK, Thailand",
},{
    value: "BLZ - CHILEKA INTL, BLANTYRE, Malawi",
    citycode: "BLZ",
    desc: "BLZ - CHILEKA INTL, BLANTYRE, Malawi",
},{
    value: "VUU - MVUU CAMP, BLANTYRE, Malawi",
    citycode: "BLZ",
    desc: "VUU - MVUU CAMP, BLANTYRE, Malawi",
},{
    value: "BOS - LOGAN INTL, BOSTON, United States",
    citycode: "BOS",
    desc: "BOS - LOGAN INTL, BOSTON, United States",
},{
    value: "PSM - PORTSMOUTH PEASE INTL, BOSTON, United States",
    citycode: "BOS",
    desc: "PSM - PORTSMOUTH PEASE INTL, BOSTON, United States",
},{
    value: "BMT - BEAUMONT MNCPL, BEAUMONT, United States",
    citycode: "BPT",
    desc: "BMT - BEAUMONT MNCPL, BEAUMONT, United States",
},{
    value: "BPT - JEFFERSON CNTY, BEAUMONT, United States",
    citycode: "BPT",
    desc: "BPT - JEFFERSON CNTY, BEAUMONT, United States",
},{
    value: "BRU - BRUSSELS AIRPORT, BRUSSELS, Belgium",
    citycode: "BRU",
    desc: "BRU - BRUSSELS AIRPORT, BRUSSELS, Belgium",
},{
    value: "CRL - BRUSSELS S CHARLEROI, BRUSSELS, Belgium",
    citycode: "BRU",
    desc: "CRL - BRUSSELS S CHARLEROI, BRUSSELS, Belgium",
},{
    value: "EBR - DOWNTOWN, BATON ROUGE, United States",
    citycode: "BTR",
    desc: "EBR - DOWNTOWN, BATON ROUGE, United States",
},{
    value: "BTR - RYAN, BATON ROUGE, United States",
    citycode: "BTR",
    desc: "BTR - RYAN, BATON ROUGE, United States",
},{
    value: "AEP - J. NEWBERY, BUENOS AIRES, Argentina",
    citycode: "BUE",
    desc: "AEP - J. NEWBERY, BUENOS AIRES, Argentina",
},{
    value: "EZE - PISTARINI, BUENOS AIRES, Argentina",
    citycode: "BUE",
    desc: "EZE - PISTARINI, BUENOS AIRES, Argentina",
},{
    value: "BBU - BANEASA AUREL VLAICU, BUCHAREST, Romania",
    citycode: "BUH",
    desc: "BBU - BANEASA AUREL VLAICU, BUCHAREST, Romania",
},{
    value: "OTP - HENRI COANDA, BUCHAREST, Romania",
    citycode: "BUH",
    desc: "OTP - HENRI COANDA, BUCHAREST, Romania",
},{
    value: "BVV - BUREVESTNIK AFB, ITURUP ISLAND, Russia",
    citycode: "BVV",
    desc: "BVV - BUREVESTNIK AFB, ITURUP ISLAND, Russia",
},{
    value: "ITU - ITURUP, ITURUP ISLAND, Russia",
    citycode: "BVV",
    desc: "ITU - ITURUP, ITURUP ISLAND, Russia",
},{
    value: "BXN - IMSIK AIRPORT, BODRUM, Turkey",
    citycode: "BXN",
    desc: "BXN - IMSIK AIRPORT, BODRUM, Turkey",
},{
    value: "BJV - MILAS, BODRUM, Turkey",
    citycode: "BXN",
    desc: "BJV - MILAS, BODRUM, Turkey",
},{
    value: "BYH - AFB, BLYTHEVILLE, United States",
    citycode: "BYH",
    desc: "BYH - AFB, BLYTHEVILLE, United States",
},{
    value: "HKA - BLYTHEVILLE MNPL, BLYTHEVILLE, United States",
    citycode: "BYH",
    desc: "HKA - BLYTHEVILLE MNPL, BLYTHEVILLE, United States",
},{
    value: "TZA - BELIZE CITY MNPL, BELIZE CITY, Belize",
    citycode: "BZE",
    desc: "TZA - BELIZE CITY MNPL, BELIZE CITY, Belize",
},{
    value: "BZE - P.S.W. GOLDSON INTL, BELIZE CITY, Belize",
    citycode: "BZE",
    desc: "BZE - P.S.W. GOLDSON INTL, BELIZE CITY, Belize",
},{
    value: "CAK - AKRON, CANTON AKRON, United States",
    citycode: "CAK",
    desc: "CAK - AKRON, CANTON AKRON, United States",
},{
    value: "AKC - AKRON FULTON, CANTON AKRON, United States",
    citycode: "CAK",
    desc: "AKC - AKRON FULTON, CANTON AKRON, United States",
},{
    value: "CAS - ANFA, CASABLANCA, Morocco",
    citycode: "CAS",
    desc: "CAS - ANFA, CASABLANCA, Morocco",
},{
    value: "CMN - MOHAMMED V, CASABLANCA, Morocco",
    citycode: "CAS",
    desc: "CMN - MOHAMMED V, CASABLANCA, Morocco",
},{
    value: "CDV - MERLE K MUDHOLE SMITH, CORDOVA, United States",
    citycode: "CDV",
    desc: "CDV - MERLE K MUDHOLE SMITH, CORDOVA, United States",
},{
    value: "CKU - MUNICIPAL, CORDOVA, United States",
    citycode: "CDV",
    desc: "CKU - MUNICIPAL, CORDOVA, United States",
},{
    value: "HSJ - SHANGJIE, ZHENGZHOU, China",
    citycode: "CGO",
    desc: "HSJ - SHANGJIE, ZHENGZHOU, China",
},{
    value: "CGO - XINZHENG INTL, ZHENGZHOU, China",
    citycode: "CGO",
    desc: "CGO - XINZHENG INTL, ZHENGZHOU, China",
},{
    value: "CLT - DOUGLAS, CHARLOTTE, United States",
    citycode: "CLT",
    desc: "CLT - DOUGLAS, CHARLOTTE, United States",
},{
    value: "QWG - WILGROVE PARK, CHARLOTTE, United States",
    citycode: "CLT",
    desc: "QWG - WILGROVE PARK, CHARLOTTE, United States",
},{
    value: "COI - MERRITT ISLAND, COCOA, United States",
    citycode: "COI",
    desc: "COI - MERRITT ISLAND, COCOA, United States",
},{
    value: "COF - PATRICK AFB, COCOA, United States",
    citycode: "COI",
    desc: "COF - PATRICK AFB, COCOA, United States",
},{
    value: "CPH - KASTRUP, COPENHAGEN, Denmark",
    citycode: "CPH",
    desc: "CPH - KASTRUP, COPENHAGEN, Denmark",
},{
    value: "RKE - ROSKILDE, COPENHAGEN, Denmark",
    citycode: "CPH",
    desc: "RKE - ROSKILDE, COPENHAGEN, Denmark",
},{
    value: "CLK - REGIONAL, CLINTON, United States",
    citycode: "CSM",
    desc: "CLK - REGIONAL, CLINTON, United States",
},{
    value: "CSM - SHERMAN, CLINTON, United States",
    citycode: "CSM",
    desc: "CSM - SHERMAN, CLINTON, United States",
},{
    value: "XTX - PORT FREE TRADE ZONE, CHENGDU, China",
    citycode: "CTU",
    desc: "XTX - PORT FREE TRADE ZONE, CHENGDU, China",
},{
    value: "CTU - SHUANGLIU INTL, CHENGDU, China",
    citycode: "CTU",
    desc: "CTU - SHUANGLIU INTL, CHENGDU, China",
},{
    value: "LUK - CINCINNATI MNPL, CINCINNATI, United States",
    citycode: "CVG",
    desc: "LUK - CINCINNATI MNPL, CINCINNATI, United States",
},{
    value: "CVG - NTH KENTUCKY, CINCINNATI, United States",
    citycode: "CVG",
    desc: "CVG - NTH KENTUCKY, CINCINNATI, United States",
},{
    value: "CVS - CANNON AFB, CLOVIS, United States",
    citycode: "CVN",
    desc: "CVS - CANNON AFB, CLOVIS, United States",
},{
    value: "CVN - CLOVIS MNPL, CLOVIS, United States",
    citycode: "CVN",
    desc: "CVN - CLOVIS MNPL, CLOVIS, United States",
},{
    value: "CWB - AFONSO PENA INTL, CURITIBA, Brazil",
    citycode: "CWB",
    desc: "CWB - AFONSO PENA INTL, CURITIBA, Brazil",
},{
    value: "BFH - BACACHERI, CURITIBA, Brazil",
    citycode: "CWB",
    desc: "BFH - BACACHERI, CURITIBA, Brazil",
},{
    value: "XOZ - FREE ZONE, DOHA, Qatar",
    citycode: "DOH",
    desc: "XOZ - FREE ZONE, DOHA, Qatar",
},{
    value: "DOH - HAMAD INTERNATIONAL, DOHA, Qatar",
    citycode: "DOH",
    desc: "DOH - HAMAD INTERNATIONAL, DOHA, Qatar",
},{
    value: "DCF - CANEFIELD, DOMINICA, Dominica",
    citycode: "DOM",
    desc: "DCF - CANEFIELD, DOMINICA, Dominica",
},{
    value: "DOM - MELVILLE HALL, DOMINICA, Dominica",
    citycode: "DOM",
    desc: "DOM - MELVILLE HALL, DOMINICA, Dominica",
},{
    value: "DRB - DERBY AIRPORT, DERBY, Australia",
    citycode: "DRB",
    desc: "DRB - DERBY AIRPORT, DERBY, Australia",
},{
    value: "DCN - RAAF CURTIN, DERBY, Australia",
    citycode: "DRB",
    desc: "DCN - RAAF CURTIN, DERBY, Australia",
},{
    value: "AMK - ANIMAS AIR PARK, DURANGO, United States",
    citycode: "DRO",
    desc: "AMK - ANIMAS AIR PARK, DURANGO, United States",
},{
    value: "DRO - LA PLATA COUNTY, DURANGO, United States",
    citycode: "DRO",
    desc: "DRO - LA PLATA COUNTY, DURANGO, United States",
},{
    value: "DRT - DEL RIO INTL, DEL RIO, United States",
    citycode: "DRT",
    desc: "DRT - DEL RIO INTL, DEL RIO, United States",
},{
    value: "DLF - LAUGHLIN AFB, DEL RIO, United States",
    citycode: "DRT",
    desc: "DLF - LAUGHLIN AFB, DEL RIO, United States",
},{
    value: "DUG - BISBEE DOUGLAS INTL, DOUGLAS BISBEE, United States",
    citycode: "DUG",
    desc: "DUG - BISBEE DOUGLAS INTL, DOUGLAS BISBEE, United States",
},{
    value: "DGL - DOUGLAS MNPL, DOUGLAS BISBEE, United States",
    citycode: "DUG",
    desc: "DGL - DOUGLAS MNPL, DOUGLAS BISBEE, United States",
},{
    value: "DUR - KING SHAKA INTL, DURBAN, South Africa",
    citycode: "DUR",
    desc: "DUR - KING SHAKA INTL, DURBAN, South Africa",
},{
    value: "VIR - VIRGINIA, DURBAN, South Africa",
    citycode: "DUR",
    desc: "VIR - VIRGINIA, DURBAN, South Africa",
},{
    value: "BSL - BASEL EUROAIRPORT, MULHOUSE BASEL, France",
    citycode: "EAP",
    desc: "BSL - BASEL EUROAIRPORT, MULHOUSE BASEL, France",
},{
    value: "MLH - MULHOUSE EUROAIRPORT, MULHOUSE BASEL, France",
    citycode: "EAP",
    desc: "MLH - MULHOUSE EUROAIRPORT, MULHOUSE BASEL, France",
},{
    value: "BIF - BIGGS AAF, EL PASO, United States",
    citycode: "ELP",
    desc: "BIF - BIGGS AAF, EL PASO, United States",
},{
    value: "ELP - EL PASO INTL, EL PASO, United States",
    citycode: "ELP",
    desc: "ELP - EL PASO INTL, EL PASO, United States",
},{
    value: "AOE - ANADOLU, ESKISEHIR, Turkey",
    citycode: "ESK",
    desc: "AOE - ANADOLU, ESKISEHIR, Turkey",
},{
    value: "ESK - ESKISEHIR AIRPORT, ESKISEHIR, Turkey",
    citycode: "ESK",
    desc: "ESK - ESKISEHIR AIRPORT, ESKISEHIR, Turkey",
},{
    value: "ETH - EILAT, EILAT, Israel",
    citycode: "ETH",
    desc: "ETH - EILAT, EILAT, Israel",
},{
    value: "VDA - OVDA, EILAT, Israel",
    citycode: "ETH",
    desc: "VDA - OVDA, EILAT, Israel",
},{
    value: "EYW - KEY WEST INTL, KEY WEST, United States",
    citycode: "EYW",
    desc: "EYW - KEY WEST INTL, KEY WEST, United States",
},{
    value: "NQX - NAS, KEY WEST, United States",
    citycode: "EYW",
    desc: "NQX - NAS, KEY WEST, United States",
},{
    value: "FCH - CHANDLER EXECUTIVE, FRESNO, United States",
    citycode: "FAT",
    desc: "FCH - CHANDLER EXECUTIVE, FRESNO, United States",
},{
    value: "FAT - FRESNO YOSEMITE INTL, FRESNO, United States",
    citycode: "FAT",
    desc: "FAT - FRESNO YOSEMITE INTL, FRESNO, United States",
},{
    value: "FAY - FAYETTEVILLE MNPL, FAYETTEVILLE, United States",
    citycode: "FAY",
    desc: "FAY - FAYETTEVILLE MNPL, FAYETTEVILLE, United States",
},{
    value: "POB - POPE AFB, FAYETTEVILLE, United States",
    citycode: "FAY",
    desc: "POB - POPE AFB, FAYETTEVILLE, United States",
},{
    value: "FIH - N DJILI INTL, KINSHASA",
    citycode: "FIH",
    desc: "FIH - N DJILI INTL, KINSHASA",
},{
    value: "NLO - N DOLO, KINSHASA",
    citycode: "FIH",
    desc: "NLO - N DOLO, KINSHASA",
},{
    value: "FXE - EXECUTIVE, FORT LAUDERDALE, United States",
    citycode: "FLL",
    desc: "FXE - EXECUTIVE, FORT LAUDERDALE, United States",
},{
    value: "FLL - FLL INTL, FORT LAUDERDALE, United States",
    citycode: "FLL",
    desc: "FLL - FLL INTL, FORT LAUDERDALE, United States",
},{
    value: "HGS - HASTINGS, FREETOWN, Sierra Leone",
    citycode: "FNA",
    desc: "HGS - HASTINGS, FREETOWN, Sierra Leone",
},{
    value: "FNA - LUNGI INTL, FREETOWN, Sierra Leone",
    citycode: "FNA",
    desc: "FNA - LUNGI INTL, FREETOWN, Sierra Leone",
},{
    value: "FRA - FRANKFURT INTL, FRANKFURT, Germany",
    citycode: "FRA",
    desc: "FRA - FRANKFURT INTL, FRANKFURT, Germany",
},{
    value: "HHN - HAHN AIRPORT, FRANKFURT, Germany",
    citycode: "FRA",
    desc: "HHN - HAHN AIRPORT, FRANKFURT, Germany",
},{
    value: "FWA - MUNICIPAL, FORT WAYNE, United States",
    citycode: "FWA",
    desc: "FWA - MUNICIPAL, FORT WAYNE, United States",
},{
    value: "SMD - SMITH FIELD, FORT WAYNE, United States",
    citycode: "FWA",
    desc: "SMD - SMITH FIELD, FORT WAYNE, United States",
},{
    value: "GAO - GUANTANAMO BAY NS, GUANTANAMO, Cuba",
    citycode: "GAO",
    desc: "GAO - GUANTANAMO BAY NS, GUANTANAMO, Cuba",
},{
    value: "NBW - MARIANA GRAJALES, GUANTANAMO, Cuba",
    citycode: "GAO",
    desc: "NBW - MARIANA GRAJALES, GUANTANAMO, Cuba",
},{
    value: "GEO - CHEDDI JAGAN INT, GEORGETOWN, Guyana",
    citycode: "GEO",
    desc: "GEO - CHEDDI JAGAN INT, GEORGETOWN, Guyana",
},{
    value: "OGL - OGLE, GEORGETOWN, Guyana",
    citycode: "GEO",
    desc: "OGL - OGLE, GEORGETOWN, Guyana",
},{
    value: "GLA - GLASGOW INTL, GLASGOW, United Kingdom",
    citycode: "GLA",
    desc: "GLA - GLASGOW INTL, GLASGOW, United Kingdom",
},{
    value: "PIK - PRESTWICK, GLASGOW, United Kingdom",
    citycode: "GLA",
    desc: "PIK - PRESTWICK, GLASGOW, United Kingdom",
},{
    value: "GSE - CITY AIRPORT, GOTEBORG, Sweden",
    citycode: "GOT",
    desc: "GSE - CITY AIRPORT, GOTEBORG, Sweden",
},{
    value: "GOT - LANDVETTER, GOTEBORG, Sweden",
    citycode: "GOT",
    desc: "GOT - LANDVETTER, GOTEBORG, Sweden",
},{
    value: "BQV - BARTLETT COVE SBP, GUSTAVUS, United States",
    citycode: "GST",
    desc: "BQV - BARTLETT COVE SBP, GUSTAVUS, United States",
},{
    value: "GST - GUSTAVUS AIRPORT, GUSTAVUS, United States",
    citycode: "GST",
    desc: "GST - GUSTAVUS AIRPORT, GUSTAVUS, United States",
},{
    value: "GUM - A.B WON PAT INTL, GUAM, Guam",
    citycode: "GUM",
    desc: "GUM - A.B WON PAT INTL, GUAM, Guam",
},{
    value: "UAM - ANDERSEN AFB, GUAM, Guam",
    citycode: "GUM",
    desc: "UAM - ANDERSEN AFB, GUAM, Guam",
},{
    value: "HAM - HAMBURG, HAMBURG, Germany",
    citycode: "HAM",
    desc: "HAM - HAMBURG, HAMBURG, Germany",
},{
    value: "LBC - LUEBECK-BLANKENSEE, HAMBURG, Germany",
    citycode: "HAM",
    desc: "LBC - LUEBECK-BLANKENSEE, HAMBURG, Germany",
},{
    value: "MDT - HARRISBURG INTL, HARRISBURG, United States",
    citycode: "HAR",
    desc: "MDT - HARRISBURG INTL, HARRISBURG, United States",
},{
    value: "HAR - SKYPORT, HARRISBURG, United States",
    citycode: "HAR",
    desc: "HAR - SKYPORT, HARRISBURG, United States",
},{
    value: "HAV - JOSE MARTI INTL, HAVANA, Cuba",
    citycode: "HAV",
    desc: "HAV - JOSE MARTI INTL, HAVANA, Cuba",
},{
    value: "UPB - PLAYA BARACOA, HAVANA, Cuba",
    citycode: "HAV",
    desc: "UPB - PLAYA BARACOA, HAVANA, Cuba",
},{
    value: "HCA - HOWARD COUNTY, BIG SPRING, United States",
    citycode: "HCA",
    desc: "HCA - HOWARD COUNTY, BIG SPRING, United States",
},{
    value: "BGS - WEBB AFB, BIG SPRING, United States",
    citycode: "HCA",
    desc: "BGS - WEBB AFB, BIG SPRING, United States",
},{
    value: "HEM - HELSINKI MALMI, HELSINKI, Finland",
    citycode: "HEL",
    desc: "HEM - HELSINKI MALMI, HELSINKI, Finland",
},{
    value: "HEL - HELSINKI VANTAA, HELSINKI, Finland",
    citycode: "HEL",
    desc: "HEL - HELSINKI VANTAA, HELSINKI, Finland",
},{
    value: "HIJ - HIROSHIMA AIRPORT, HIROSHIMA, Japan",
    citycode: "HIJ",
    desc: "HIJ - HIROSHIMA AIRPORT, HIROSHIMA, Japan",
},{
    value: "HIW - HIROSHIMANISHI, HIROSHIMA, Japan",
    citycode: "HIJ",
    desc: "HIW - HIROSHIMANISHI, HIROSHIMA, Japan",
},{
    value: "HIK - HICKAM AFB, HONOLULU, United States",
    citycode: "HNL",
    desc: "HIK - HICKAM AFB, HONOLULU, United States",
},{
    value: "HNL - HONOLULU INTL, HONOLULU, United States",
    citycode: "HNL",
    desc: "HNL - HONOLULU INTL, HONOLULU, United States",
},{
    value: "HBB - INDUSTRIAL AIRPARK, HOBBS, United States",
    citycode: "HOB",
    desc: "HBB - INDUSTRIAL AIRPARK, HOBBS, United States",
},{
    value: "HOB - LEA COUNTY REGIONAL, HOBBS, United States",
    citycode: "HOB",
    desc: "HOB - LEA COUNTY REGIONAL, HOBBS, United States",
},{
    value: "HRI - MATTALA RAJAPAKSA INTL, HAMBANTOTA, Sri Lanka",
    citycode: "HRI",
    desc: "HRI - MATTALA RAJAPAKSA INTL, HAMBANTOTA, Sri Lanka",
},{
    value: "HBT - SPB, HAMBANTOTA, Sri Lanka",
    citycode: "HRI",
    desc: "HBT - SPB, HAMBANTOTA, Sri Lanka",
},{
    value: "HSV - HUNTSVILLE INTL APT, HUNTSVILLE, United States",
    citycode: "HSV",
    desc: "HSV - HUNTSVILLE INTL APT, HUNTSVILLE, United States",
},{
    value: "HUA - REDSTONE AAF, HUNTSVILLE, United States",
    citycode: "HSV",
    desc: "HUA - REDSTONE AAF, HUNTSVILLE, United States",
},{
    value: "BPM - BEGUMPET AIRPORT, HYDERABAD, India",
    citycode: "HYD",
    desc: "BPM - BEGUMPET AIRPORT, HYDERABAD, India",
},{
    value: "HYD - RAJIV GANDHI INTL, HYDERABAD, India",
    citycode: "HYD",
    desc: "HYD - RAJIV GANDHI INTL, HYDERABAD, India",
},{
    value: "YFI - FIREBAG, FORT MACKAY, Canada",
    citycode: "HZP",
    desc: "YFI - FIREBAG, FORT MACKAY, Canada",
},{
    value: "HZP - HORIZON, FORT MACKAY,Canada",
    citycode: "HZP",
    desc: "HZP - HORIZON, FORT MACKAY,Canada",
},{
    value: "KBP - BORYSPIL INTL, KIEV,Ukraine",
    citycode: "IEV",
    desc: "KBP - BORYSPIL INTL, KIEV,Ukraine",
},{
    value: "IPL - IMPERIAL COUNTY, KIEV,Ukraine",
    citycode: "IEV",
    desc: "IPL - IMPERIAL COUNTY, KIEV,Ukraine",
},{
    value: "NJK - EL CENTRO NAF, IMPERIAL EL CENTRO,United States",
    citycode: "IPL",
    desc: "NJK - EL CENTRO NAF, IMPERIAL EL CENTRO,United States",
},{
    value: "IPL - IMPERIAL COUNTY, IMPERIAL EL CENTRO,United States",
    citycode: "IPL",
    desc: "IPL - IMPERIAL COUNTY, IMPERIAL EL CENTRO,United States",
},{
    value: "ISC - SAINT MARYS, ISLES OF SCILLY,United Kingdom",
    citycode: "ISC",
    desc: "ISC - SAINT MARYS, ISLES OF SCILLY,United Kingdom",
},{
    value: "TSO - TRESCO HELIPORT, ISLES OF SCILLY,United Kingdom",
    citycode: "ISC",
    desc: "TSO - TRESCO HELIPORT, ISLES OF SCILLY,United Kingdom",
},{
    value: "IST - ATATURK, ISTANBUL,Turkey",
    citycode: "IST",
    desc: "IST - ATATURK, ISTANBUL,Turkey",
},{
    value: "SAW - SABIHA GOKCEN, ISTANBUL,Turkey",
    citycode: "IST",
    desc: "SAW - SABIHA GOKCEN, ISTANBUL,Turkey",
},{
    value: "ADB - ADNAN MENDERES, IZMIR,Turkey",
    citycode: "IZM",
    desc: "ADB - ADNAN MENDERES, IZMIR,Turkey",
},{
    value: "IGL - CIGLI AB, IZMIR,Turkey",
    citycode: "IZM",
    desc: "IGL - CIGLI AB, IZMIR,Turkey",
},{
    value: "HKS - HAWKINS FIELD, JACKSON,United States",
    citycode: "JAN",
    desc: "HKS - HAWKINS FIELD, JACKSON,United States",
},{
    value: "JAN - JACKSON EVERS INTL, JACKSON,United States",
    citycode: "JAN",
    desc: "JAN - JACKSON EVERS INTL, JACKSON,United States",
},{
    value: "JDF - FRANCISCO DE ASSIS, JUIZ DE FORA,Brazil",
    citycode: "JDF",
    desc: "JDF - FRANCISCO DE ASSIS, JUIZ DE FORA,Brazil",
},{
    value: "IZA - PRESIDENTE I.FRANCO, JUIZ DE FORA,Brazil",
    citycode: "JDF",
    desc: "IZA - PRESIDENTE I.FRANCO, JUIZ DE FORA,Brazil",
},{
    value: "HLP - HALIM PERDANAKUSAMA, JAKARTA,Indonesia",
    citycode: "JKT",
    desc: "HLP - HALIM PERDANAKUSAMA, JAKARTA,Indonesia",
},{
    value: "CGK - SOEKARNO HATTA INTL, JAKARTA,Indonesia",
    citycode: "JKT",
    desc: "CGK - SOEKARNO HATTA INTL, JAKARTA,Indonesia",
},{
    value: "DQM - INTERNATIONAL, DUQM,Oman",
    citycode: "JNJ",
    desc: "DQM - INTERNATIONAL, DUQM,Oman",
},{
    value: "JNJ - JAALUNI, DUQM,Oman",
    citycode: "JNJ",
    desc: "JNJ - JAALUNI, DUQM,Oman",
},{
    value: "KDZ - POLGOLLA RESERVOIR SPB, KANDY,Sri Lanka",
    citycode: "KDW",
    desc: "KDZ - POLGOLLA RESERVOIR SPB, KANDY,Sri Lanka",
},{
    value: "KDW - VICTORIA RESERVOIR SPB, KANDY,Sri Lanka",
    citycode: "KDW",
    desc: "KDW - VICTORIA RESERVOIR SPB, KANDY,Sri Lanka",
},{
    value: "KIN - NORMAN MANLEY INTL, KINGSTON,Jamaica",
    citycode: "KIN",
    desc: "KIN - NORMAN MANLEY INTL, KINGSTON,Jamaica",
},{
    value: "KTP - TINSON PEN, KINGSTON,Jamaica",
    citycode: "KIN",
    desc: "KTP - TINSON PEN, KINGSTON,Jamaica",
},{
    value: "WFB - HARBOR SPB, KETCHIKAN,United States",
    citycode: "KTN",
    desc: "WFB - HARBOR SPB, KETCHIKAN,United States",
},{
    value: "KTN - KETCHIKAN INTL, KETCHIKAN,United States",
    citycode: "KTN",
    desc: "KTN - KETCHIKAN INTL, KETCHIKAN,United States",
},{
    value: "KUL - KUALA LUMPUR INTL, KUALA LUMPUR,Malaysia",
    citycode: "KUL",
    desc: "KUL - KUALA LUMPUR INTL, KUALA LUMPUR,Malaysia",
},{
    value: "SZB - SULTAN ABDUL AZIZ SHAH, KUALA LUMPUR,Malaysia",
    citycode: "KUL",
    desc: "SZB - SULTAN ABDUL AZIZ SHAH, KUALA LUMPUR,Malaysia",
},{
    value: "LBB - LUBBOCK INTL, LUBBOCK,United States",
    citycode: "LBB",
    desc: "LBB - LUBBOCK INTL, LUBBOCK,United States",
},{
    value: "REE - REESE AFB, LUBBOCK,United States",
    citycode: "LBB",
    desc: "REE - REESE AFB, LUBBOCK,United States",
},{
    value: "CWF - CHENNAULT INTL, LAKE CHARLES,United States",
    citycode: "LCH",
    desc: "CWF - CHENNAULT INTL, LAKE CHARLES,United States",
},{
    value: "LCH - LAKE CHARLES MNPL, LAKE CHARLES,United States",
    citycode: "LCH",
    desc: "LCH - LAKE CHARLES MNPL, LAKE CHARLES,United States",
},{
    value: "LCH - LAKE CHARLES MNPL, LAKE CHARLES,United States",
    citycode: "LED",
    desc: "LCH - LAKE CHARLES MNPL, LAKE CHARLES,United States",
},{
    value: "LED - PULKOVO, SAINT PETERSBURG,Russia",
    citycode: "LED",
    desc: "LED - PULKOVO, SAINT PETERSBURG,Russia",
},{
    value: "RVH - RZHEVKA, SAINT PETERSBURG,Russia",
    citycode: "LED",
    desc: "RVH - RZHEVKA, SAINT PETERSBURG,Russia",
},
{
    value: "LEX - BLUE GRASS, LEXINGTON,United States",
    citycode: "LEX",
    desc: "LEX - BLUE GRASS, LEXINGTON,United States",
},
{
    value: "LSD - CREECH AAF, LEXINGTON,United States",
    citycode: "LEX",
    desc: "LSD - CREECH AAF, LEXINGTON,United States",
},
{
    value: "LPC - LOMPOC APT, LOMPOC,United States",
    citycode: "LPC",
    desc: "LPC - LOMPOC APT, LOMPOC,United States",
},
{
    value: "VBG - VANDENBERG AFB, LOMPOC,United States",
    citycode: "LPC",
    desc: "VBG - VANDENBERG AFB, LOMPOC,United States",
},
{
    value: "LTS - ALTUS AFB, ALTUS,United States",
    citycode: "LTS",
    desc: "LTS - ALTUS AFB, ALTUS,United States",
},
{
    value: "AXS - QUARTZ MOUNTAIN RGNL, ALTUS,United States",
    citycode: "LTS",
    desc: "AXS - QUARTZ MOUNTAIN RGNL, ALTUS,United States",
},
{
    value: "PIB - HATTIESBURG, LAUREL,United States",
    citycode: "LUL",
    desc: "PIB - HATTIESBURG, LAUREL,United States",
},
{
    value: "LUL - HESLER NOBLE FLD, LAUREL,United States",
    citycode: "LUL",
    desc: "LUL - HESLER NOBLE FLD, LAUREL,United States",
},
{
    value: "MAD - ADOLFO SUAREZ BARAJAS, MADRID,Spain",
    citycode: "MAD",
    desc: "MAD - ADOLFO SUAREZ BARAJAS, MADRID,Spain",
},
{
    value: "TOJ - TORREJON, MADRID,Spain",
    citycode: "MAD",
    desc: "TOJ - TORREJON, MADRID,Spain",
},
{
    value: "MDD - AIRPARK, MIDLAND,United States",
    citycode: "MAF",
    desc: "MDD - AIRPARK, MIDLAND,United States",
},
{
    value: "MAF - ODESSA, MIDLAND,United States",
    citycode: "MAF",
    desc: "MAF - ODESSA, MIDLAND,United States",
},
{
    value: "MER - CASTLE, MERCED,United States",
    citycode: "MCE",
    desc: "MER - CASTLE, MERCED,United States",
},
{
    value: "MCE - REGIONAL, MERCED,United States",
    citycode: "MCE",
    desc: "MCE - REGIONAL, MERCED,United States",
},
{
    value: "MDE - JOSE MARIA CORDOVA INT, MEDELLIN,Colombia",
    citycode: "MDE",
    desc: "MDE - JOSE MARIA CORDOVA INT, MEDELLIN,Colombia",
},
{
    value: "EOH - OLAYA HERRERA, MEDELLIN,Colombia",
    citycode: "MDE",
    desc: "EOH - OLAYA HERRERA, MEDELLIN,Colombia",
},
{
    value: "MEM - MEMPHIS INTL, MEMPHIS,United States",
    citycode: "MEM",
    desc: "MEM - MEMPHIS INTL, MEMPHIS,United States",
},
{
    value: "NQA - NAS, MEMPHIS,United States",
    citycode: "MEM",
    desc: "NQA - NAS, MEMPHIS,United States",
},
{
    value: "KNO - KUALA NAMU, MEDAN,Indonesia",
    citycode: "MES",
    desc: "KNO - KUALA NAMU, MEDAN,Indonesia",
},
{
    value: "MES - POLONIA, MEDAN,Indonesia",
    citycode: "MES",
    desc: "MES - POLONIA, MEDAN,Indonesia",
},
{
    value: "NCQ - ATLANTA NAS, MARIETTA,United States",
    citycode: "MGE",
    desc: "NCQ - ATLANTA NAS, MARIETTA,United States",
},
{
    value: "MGE - DOBBINS AFB, MARIETTA,United States",
    citycode: "MGE",
    desc: "MGE - DOBBINS AFB, MARIETTA,United States",
},
{
    value: "MUL - SPENCE, MOULTRIE,United States",
    citycode: "MGR",
    desc: "MUL - SPENCE, MOULTRIE,United States",
},
{
    value: "MGR - THOMASVILLE, MOULTRIE,United States",
    citycode: "MGR",
    desc: "MGR - THOMASVILLE, MOULTRIE,United States",
},
{
    value: "MKE - GENERAL MITCHELL, MILWAUKEE,United States",
    citycode: "MKE",
    desc: "MKE - GENERAL MITCHELL, MILWAUKEE,United States",
},
{
    value: "MWC - TIMMERMAN, MILWAUKEE,United States",
    citycode: "MKE",
    desc: "MWC - TIMMERMAN, MILWAUKEE,United States",
},
{
    value: "MKO - DAVIS FIELD, MUSKOGEE,United States",
    citycode: "MKO",
    desc: "MKO - DAVIS FIELD, MUSKOGEE,United States",
},
{
    value: "HAX - HATBOX FIELD, MUSKOGEE,United States",
    citycode: "MKO",
    desc: "HAX - HATBOX FIELD, MUSKOGEE,United States",
},
{
    value: "ROB - ROBERTS INTL, MONROVIA,Liberia",
    citycode: "MLW",
    desc: "ROB - ROBERTS INTL, MONROVIA,Liberia",
},
{
    value: "MLW - SPRIGGS PAYNE, MONROVIA,Liberia",
    citycode: "MLW",
    desc: "MLW - SPRIGGS PAYNE, MONROVIA,Liberia",
},
{
    value: "SGL - DANILO ATIENZA AB, MANILA,Philippines",
    citycode: "MNL",
    desc: "SGL - DANILO ATIENZA AB, MANILA,Philippines",
},
{
    value: "MNL - NINOY AQUINO INTL, MANILA,Philippines",
    citycode: "MNL",
    desc: "MNL - NINOY AQUINO INTL, MANILA,Philippines",
},
{
    value: "BFM - MOB AEROSPACE, MOBILE,United States",
    citycode: "MOB",
    desc: "BFM - MOB AEROSPACE, MOBILE,United States",
},
{
    value: "MOB - MOBILE MUNICIPAL, MOBILE,United States",
    citycode: "MOB",
    desc: "MOB - MOBILE MUNICIPAL, MOBILE,United States",
},
{
    value: "MIB - MINOT AFB, MINOT,United States",
    citycode: "MOT",
    desc: "MIB - MINOT AFB, MINOT,United States",
},
{
    value: "MOT - MINOT INTL, MINOT,United States",
    citycode: "MOT",
    desc: "MOT - MINOT INTL, MINOT,United States",
},
{
    value: "OAR - MARINA MUNICIPAL, MONTEREY CARMEL,United States",
    citycode: "MRY",
    desc: "OAR - MARINA MUNICIPAL, MONTEREY CARMEL,United States",
},
{
    value: "MRY - MONTEREY REGIONAL, MONTEREY CARMEL,United States",
    citycode: "MRY",
    desc: "MRY - MONTEREY REGIONAL, MONTEREY CARMEL,United States",
},
{
    value: "BHT - BRIGHTON DOWNS, BRIGHTON DOWNS,Australia",
    citycode: "BHT",
    desc: "BHT - BRIGHTON DOWNS, BRIGHTON DOWNS,Australia",
},{
    value: "BHU - BHAVNAGAR, BHAVNAGAR,India",
    citycode: "BHU",
    desc: "BHU - BHAVNAGAR, BHAVNAGAR,India",
},{
    value: "BHV - BAHAWALPUR, BAHAWALPUR,Pakistan",
    citycode: "BHV",
    desc: "BHV - BAHAWALPUR, BAHAWALPUR,Pakistan",
},{
    value: "BHX - BIRMINGHAM, BIRMINGHAM,United Kingdom",
    citycode: "BHX",
    desc: "BHX - BIRMINGHAM, BIRMINGHAM,United Kingdom",
},{
    value: "BHY - FUCHENG, BEIHAI,China",
    citycode: "BHY",
    desc: "BHY - FUCHENG, BEIHAI,China",
},{
    value: "BIA - PORETTA, BASTIA,France",
    citycode: "BIA",
    desc: "BIA - PORETTA, BASTIA,France",
},{
    value: "BIB - BAIDOA, BAIDOA,Somalia",
    citycode: "BIB",
    desc: "BIB - BAIDOA, BAIDOA,Somalia",
},{
    value: "BID - BLOCK ISLAND, BLOCK ISLAND,United States",
    citycode: "BID",
    desc: "BID - BLOCK ISLAND, BLOCK ISLAND,United States",
},{
    value: "BIE - BEATRICE, BEATRICE,United States",
    citycode: "BIE",
    desc: "BIE - BEATRICE, BEATRICE,United States",
},{
    value: "BIG - ALLEN AAF, DELTA JUNCTION,United States",
    citycode: "BIG",
    desc: "BIG - ALLEN AAF, DELTA JUNCTION,United States",
},{
    value: "BIH - EASTERN SIERRA RGNL, BISHOP,United States",
    citycode: "BIH",
    desc: "BIH - EASTERN SIERRA RGNL, BISHOP,United States",
},{
    value: "BII - ENYU, BIKINI ATOLL,Marshall Islands",
    citycode: "BII",
    desc: "BII - ENYU, BIKINI ATOLL,Marshall Islands",
},{
    value: "BIJ - BILIAU, BILIAU,Papua New Guinea",
    citycode: "BIJ",
    desc: "BIJ - BILIAU, BILIAU,Papua New Guinea",
},{
    value: "BIK - FRANS KAISIEPO, BIAK,Indonesia",
    citycode: "BIK",
    desc: "BIK - FRANS KAISIEPO, BIAK,Indonesia",
},{
    value: "BIL - LOGAN INTL, BILLINGS,United States",
    citycode: "BIL",
    desc: "BIL - LOGAN INTL, BILLINGS,United States",
},{
    value: "BIN - BAMYAN, BAMYAN,Afghanistan",
    citycode: "BIN",
    desc: "BIN - BAMYAN, BAMYAN,Afghanistan",
},{
    value: "BIO - BILBAO AIRPORT, BILBAO,Spain",
    citycode: "BIO",
    desc: "BIO - BILBAO AIRPORT, BILBAO,Spain",
},{
    value: "BIP - BULIMBA, BULIMBA,Australia",
    citycode: "BIP",
    desc: "BIP - BULIMBA, BULIMBA,Australia",
},{
    value: "BIQ - BAYONNE ANGLET, BIARRITZ,France",
    citycode: "BIQ",
    desc: "BIQ - BAYONNE ANGLET, BIARRITZ,France",
},{
    value: "BIR - BIRATNAGAR, BIRATNAGAR,Nepal",
    citycode: "BIR",
    desc: "BIR - BIRATNAGAR, BIRATNAGAR,Nepal",
},{
    value: "BIS - BISMARCK, BISMARCK,United States",
    citycode: "BIS",
    desc: "BIS - BISMARCK, BISMARCK,United States",
},{
    value: "BIT - PATAN, BAITADI,Nepal",
    citycode: "BIT",
    desc: "BIT - PATAN, BAITADI,Nepal",
},{
    value: "BIU - BILDUDALUR, BILDUDALUR,Iceland",
    citycode: "BIU",
    desc: "BIU - BILDUDALUR, BILDUDALUR,Iceland",
},{
    value: "BIV - BRIA, BRIA,Central African Republic",
    citycode: "BIV",
    desc: "BIV - BRIA, BRIA,Central African Republic",
},{
    value: "BIX - KEESLER AFB, BILOXI,United States",
    citycode: "BIX",
    desc: "BIX - KEESLER AFB, BILOXI,United States",
},{
    value: "BIW - BILLILUNA, BILLILUNA,Australia",
    citycode: "BIW",
    desc: "BIW - BILLILUNA, BILLILUNA,Australia",
},{
    value: "BIY - BHISHO, BHISHO,South Africa",
    citycode: "BIY",
    desc: "BIY - BHISHO, BHISHO,South Africa",
},{
    value: "BIZ - BIMIN, BIMIN,Papua New Guinea",
    citycode: "BIZ",
    desc: "BIZ - BIMIN, BIMIN,Papua New Guinea",
},{
    value: "BJA - SOUMMAM ABANE RAMDANE, BEJAIA,Algeria",
    citycode: "BJA",
    desc: "BJA - SOUMMAM ABANE RAMDANE, BEJAIA,Algeria",
},{
    value: "BJB - BOJNURD, BOJNURD,Iran",
    citycode: "BJB",
    desc: "BJB - BOJNURD, BOJNURD,Iran",
},{
    value: "BJC - JEFFCO, BROOMFIELD,United States",
    citycode: "BJC",
    desc: "BJC - JEFFCO, BROOMFIELD,United States",
},{
    value: "BJD - BAKKAFJORDUR, BAKKAFJORDUR,Iceland",
    citycode: "BJD",
    desc: "BJD - BAKKAFJORDUR, BAKKAFJORDUR,Iceland",
},{
    value: "BJE - BALEELA, BALEELA,Sudan",
    citycode: "BJE",
    desc: "BJE - BALEELA, BALEELA,Sudan",
},{
    value: "BJF - BATSFJORD, BATSFJORD,Norway",
    citycode: "BJF",
    desc: "BJF - BATSFJORD, BATSFJORD,Norway",
},{
    value: "BJG - MOPAIT, KOTA MOBAGU,Indonesia",
    citycode: "BJG",
    desc: "BJG - MOPAIT, KOTA MOBAGU,Indonesia",
},{
    value: "BJH - BAJHANG, BAJHANG,Nepal",
    citycode: "BJH",
    desc: "BJH - BAJHANG, BAJHANG,Nepal",
},{
    value: "BJI - BEMIDJI APT, BEMIDJI,United States",
    citycode: "BJI",
    desc: "BJI - BEMIDJI APT, BEMIDJI,United States",
},{
    value: "BJJ - WAYNE COUNTY, WOOSTER,United States",
    citycode: "BJJ",
    desc: "BJJ - WAYNE COUNTY, WOOSTER,United States",
},{
    value: "BJK - BENJINA, NANGASURI ARU ISLAND,Indonesia",
    citycode: "BJK",
    desc: "BJK - BENJINA, NANGASURI ARU ISLAND,Indonesia",
},{
    value: "BJM - BUJUMBURA INTL, BUJUMBURA,Burundi",
    citycode: "BJM",
    desc: "BJM - BUJUMBURA INTL, BUJUMBURA,Burundi",
},{
    value: "BJN - BAJONE, BAJONE,Mozambique",
    citycode: "BJN",
    desc: "BJN - BAJONE, BAJONE,Mozambique",
},{
    value: "BJO - BERMEJO, BERMEJO,Bolivia",
    citycode: "BJO",
    desc: "BJO - BERMEJO, BERMEJO,Bolivia",
},{
    value: "BJP - ARTHUR SIQUEIRA, BRAGANCA PAULISTA,Brazil",
    citycode: "BJP",
    desc: "BJP - ARTHUR SIQUEIRA, BRAGANCA PAULISTA,Brazil",
},{
    value: "BJQ - BAHJA, BAHJA,Oman",
    citycode: "BJQ",
    desc: "BJQ - BAHJA, BAHJA,Oman",
},{
    value: "BJR - BAHAR DAR, BAHAR DAR,Ethiopia",
    citycode: "BJR",
    desc: "BJR - BAHAR DAR, BAHAR DAR,Ethiopia",
},{
    value: "BJT - BENTOTA RIVER SPB, BENTOTA,Sri Lanka",
    citycode: "BJT",
    desc: "BJT - BENTOTA RIVER SPB, BENTOTA,Sri Lanka",
},{
    value: "BJU - BAJURA ARPT, BAJURA,Nepal",
    citycode: "BJU",
    desc: "BJU - BAJURA ARPT, BAJURA,Nepal",
},{
    value: "BJX - DEL BAJIO INTL, LEON GUANAJUATO,Mexico",
    citycode: "BJX",
    desc: "BJX - DEL BAJIO INTL, LEON GUANAJUATO,Mexico",
},{
    value: "BJW - SOA, BAJAWA,Indonesia",
    citycode: "BJW",
    desc: "BJW - SOA, BAJAWA,Indonesia",
},{
    value: "BJZ - BADAJOZ, BADAJOZ,Spain",
    citycode: "BJZ",
    desc: "BJZ - BADAJOZ, BADAJOZ,Spain",
},{
    value: "BKA - BYKOVO, MOSCOW,Russia",
    citycode: "BKA",
    desc: "BKA - BYKOVO, MOSCOW,Russia",
},{
    value: "BKB - NAL, BIKANER,India",
    citycode: "BKB",
    desc: "BKB - NAL, BIKANER,India",
},{
    value: "BKC - BUCKLAND, BUCKLAND,United States",
    citycode: "BKC",
    desc: "BKC - BUCKLAND, BUCKLAND,United States",
},{
    value: "BKD - STEPHENS C, BRECKENRIDGE,United States",
    citycode: "BKD",
    desc: "BKD - STEPHENS C, BRECKENRIDGE,United States",
},{
    value: "BKE - MUNICIPAL, BAKER CITY,United States",
    citycode: "BKE",
    desc: "BKE - MUNICIPAL, BAKER CITY,United States",
},{
    value: "BKF - LAKE BROOKS SPB, KATMAI NATIONAL PARK,United States",
    citycode: "BKF",
    desc: "BKF - LAKE BROOKS SPB, KATMAI NATIONAL PARK,United States",
},{
    value: "BKG - BRANSON, BRANSON,United States",
    citycode: "BKG",
    desc: "BKG - BRANSON, BRANSON,United States",
},{
    value: "BKH - BARKING SANDS, KEKAHA,United States",
    citycode: "BKH",
    desc: "BKH - BARKING SANDS, KEKAHA,United States",
},{
    value: "BKI - INTERNATIONAL, KOTA KINABALU,Malaysia",
    citycode: "BKI",
    desc: "BKI - INTERNATIONAL, KOTA KINABALU,Malaysia",
},{
    value: "BKJ - BARALANDE, BOKE,Guinea",
    citycode: "BKJ",
    desc: "BKJ - BARALANDE, BOKE,Guinea",
},{
    value: "BKM - BAKELALAN, BAKELALAN,Malaysia",
    citycode: "BKM",
    desc: "BKM - BAKELALAN, BAKELALAN,Malaysia",
},{
    value: "BKN - BALKANABAT, BALKANABAT,Turkmenistan",
    citycode: "BKN",
    desc: "BKN - BALKANABAT, BALKANABAT,Turkmenistan",
},{
    value: "BKO - SENOU INTL, BAMAKO,Mali",
    citycode: "BKO",
    desc: "BKO - SENOU INTL, BAMAKO,Mali",
},{
    value: "BKP - BARKLY DOWNS, BARKLY DOWNS,Australia",
    citycode: "BKP",
    desc: "BKP - BARKLY DOWNS, BARKLY DOWNS,Australia",
},{
    value: "BKQ - BLACKALL, BLACKALL,Australia",
    citycode: "BKQ",
    desc: "BKQ - BLACKALL, BLACKALL,Australia",
},{
    value: "BKR - BOKORO, BOKORO,Chad",
    citycode: "BKR",
    desc: "BKR - BOKORO, BOKORO,Chad",
},{
    value: "BKS - FATMAWATI SOEKARNO, BENGKULU,Indonesia",
    citycode: "BKS",
    desc: "BKS - FATMAWATI SOEKARNO, BENGKULU,Indonesia",
},{
    value: "BKT - BLACKSTONE AA, BLACKSTONE,United States",
    citycode: "BKT",
    desc: "BKT - BLACKSTONE AA, BLACKSTONE,United States",
},{
    value: "BKU - BETIOKY, BETIOKY,Madagascar",
    citycode: "BKU",
    desc: "BKU - BETIOKY, BETIOKY,Madagascar",
},{
    value: "BKX - BROOKINGS, BROOKINGS,United States",
    citycode: "BKX",
    desc: "BKX - BROOKINGS, BROOKINGS,United States",
},{
    value: "BKW - BECKLEY, BECKLEY,United States",
    citycode: "BKW",
    desc: "BKW - BECKLEY, BECKLEY,United States",
},{
    value: "BKY - KAVUMU, BUKAVU",
    citycode: "BKY",
    desc: "BKY - KAVUMU, BUKAVU",
},{
    value: "BKZ - BUKOBA, BUKOBA,Tanzania",
    citycode: "BKZ",
    desc: "BKZ - BUKOBA, BUKOBA,Tanzania",
},{
    value: "BLA - GENERAL JA ANZOATEGUI, BARCELONA,Venezuela",
    citycode: "BLA",
    desc: "BLA - GENERAL JA ANZOATEGUI, BARCELONA,Venezuela",
},{
    value: "BLB - PANAMA PACIFICO, BALBOA,Panama",
    citycode: "BLB",
    desc: "BLB - PANAMA PACIFICO, BALBOA,Panama",
},{
    value: "BLC - BALI, BALI,Cameroon",
    citycode: "BLC",
    desc: "BLC - BALI, BALI,Cameroon",
},{
    value: "BLE - DALA AIRPORT, BORLANGE/FALUN,Sweden",
    citycode: "BLE",
    desc: "BLE - DALA AIRPORT, BORLANGE/FALUN,Sweden",
},{
    value: "BLF - MERCER COUNTY, BLUEFIELD,United States",
    citycode: "BLF",
    desc: "BLF - MERCER COUNTY, BLUEFIELD,United States",
},{
    value: "BLG - BELAGA, BELAGA,Malaysia",
    citycode: "BLG",
    desc: "BLG - BELAGA, BELAGA,Malaysia",
},{
    value: "BLH - BLYTHE, BLYTHE,United States",
    citycode: "BLH",
    desc: "BLH - BLYTHE, BLYTHE,United States",
},{
    value: "BLI - INTERNATIONAL, BELLINGHAM,United States",
    citycode: "BLI",
    desc: "BLI - INTERNATIONAL, BELLINGHAM,United States",
},{
    value: "BLJ - MOSTEPHA BEN BOULAID, BATNA,Algeria",
    citycode: "BLJ",
    desc: "BLJ - MOSTEPHA BEN BOULAID, BATNA,Algeria",
},{
    value: "BLK - BLACKPOOL, BLACKPOOL,United Kingdom",
    citycode: "BLK",
    desc: "BLK - BLACKPOOL, BLACKPOOL,United Kingdom",
},{
    value: "BLL - BILLUND, BILLUND,Denmark",
    citycode: "BLL",
    desc: "BLL - BILLUND, BILLUND,Denmark",
},{
    value: "BLM - MONMOUTH COUNTY, BELMAR,United States",
    citycode: "BLM",
    desc: "BLM - MONMOUTH COUNTY, BELMAR,United States",
},{
    value: "BLN - BENALLA, BENALLA,Australia",
    citycode: "BLN",
    desc: "BLN - BENALLA, BENALLA,Australia",
},{
    value: "BLO - BLONDUOS, BLONDUOS,Iceland",
    citycode: "BLO",
    desc: "BLO - BLONDUOS, BLONDUOS,Iceland",
},{
    value: "BLP - HUALLAGA, BELLAVISTA,Peru",
    citycode: "BLP",
    desc: "BLP - HUALLAGA, BELLAVISTA,Peru",
},{
    value: "BLQ - GUGLIELMO MARCONI, BOLOGNA,Italy",
    citycode: "BLQ",
    desc: "BLQ - GUGLIELMO MARCONI, BOLOGNA,Italy",
},{
    value: "BLR - KEMPEGOWDA INTL, BENGALURU,India",
    citycode: "BLR",
    desc: "BLR - KEMPEGOWDA INTL, BENGALURU,India",
},{
    value: "BLS - BOLLON, BOLLON,Australia",
    citycode: "BLS",
    desc: "BLS - BOLLON, BOLLON,Australia",
},{
    value: "BLT - BLACKWATER, BLACKWATER,Australia",
    citycode: "BLT",
    desc: "BLT - BLACKWATER, BLACKWATER,Australia",
},{
    value: "BLU - BLUE CANYON NYACK, EMIGRANT GAP,United States",
    citycode: "BLU",
    desc: "BLU - BLUE CANYON NYACK, EMIGRANT GAP,United States",
},{
    value: "BLV - SCOTT AFB/MIDAMERICA, BELLEVILLE,United States",
    citycode: "BLV",
    desc: "BLV - SCOTT AFB/MIDAMERICA, BELLEVILLE,United States",
},{
    value: "BLX - BELLUNO, BELLUNO,Italy",
    citycode: "BLX",
    desc: "BLX - BELLUNO, BELLUNO,Italy",
},{
    value: "BLY - BELMULLET, BELMULLET,Ireland",
    citycode: "BLY",
    desc: "BLY - BELMULLET, BELMULLET,Ireland",
},{
    value: "BMB - BUMBA, BUMBA,Congo",
    citycode: "BMB",
    desc: "BMB - BUMBA, BUMBA,Congo",
},{
    value: "BMC - BRIGHAM CITY, BRIGHAM CITY,United States",
    citycode: "BMC",
    desc: "BMC - BRIGHAM CITY, BRIGHAM CITY,United States",
},{
    value: "BMD - BELO TSIRIBIHINA, BELO TSIRIBIHINA,Madagascar",
    citycode: "BMD",
    desc: "BMD - BELO TSIRIBIHINA, BELO TSIRIBIHINA,Madagascar",
},{
    value: "BMF - BAKOUMA, BAKOUMA,Central African Republic",
    citycode: "BMF",
    desc: "BMF - BAKOUMA, BAKOUMA,Central African Republic",
},{
    value: "BMG - BLOOMINGTON, BLOOMINGTON,United States",
    citycode: "BMG",
    desc: "BMG - BLOOMINGTON, BLOOMINGTON,United States",
},{
    value: "BMH - BOMAI, BOMAI,Papua New Guinea",
    citycode: "BMH",
    desc: "BMH - BOMAI, BOMAI,Papua New Guinea",
},{
    value: "BMI - NORMAL, BLOOMINGTON,United States",
    citycode: "BMI",
    desc: "BMI - NORMAL, BLOOMINGTON,United States",
},{
    value: "BMJ - BARAMITA, BARAMITA,Guyana",
    citycode: "BMJ",
    desc: "BMJ - BARAMITA, BARAMITA,Guyana",
},{
    value: "BMK - BORKUM, BORKUM,Germany",
    citycode: "BMK",
    desc: "BMK - BORKUM, BORKUM,Germany",
},{
    value: "BML - BERLIN, BERLIN,United States",
    citycode: "BML",
    desc: "BML - BERLIN, BERLIN,United States",
},{
    value: "BMM - BITAM, BITAM,Gabon",
    citycode: "BMM",
    desc: "BMM - BITAM, BITAM,Gabon",
},{
    value: "BMN - BAMARNI, BAMARNI,Iraq",
    citycode: "BMN",
    desc: "BMN - BAMARNI, BAMARNI,Iraq",
},{
    value: "BMO - BHAMO, BHAMO,Myanmar (Burma)",
    citycode: "BMO",
    desc: "BMO - BHAMO, BHAMO,Myanmar (Burma)",
},{
    value: "BMP - BRAMPTON ISLAND, BRAMPTON ISLAND,Australia",
    citycode: "BMP",
    desc: "BMP - BRAMPTON ISLAND, BRAMPTON ISLAND,Australia",
},{
    value: "BMQ - BAMBURI, BAMBURI,Kenya",
    citycode: "BMQ",
    desc: "BMQ - BAMBURI, BAMBURI,Kenya",
},{
    value: "BMR - BALTRUM, BALTRUM,Germany",
    citycode: "BMR",
    desc: "BMR - BALTRUM, BALTRUM,Germany",
},{
    value: "BMS - S.MARIANI BITTENCOURT, BRUMADO,Brazil",
    citycode: "BMS",
    desc: "BMS - S.MARIANI BITTENCOURT, BRUMADO,Brazil",
},{
    value: "BMU - SULTAN M.SALAHUDDIN, BIMA,Indonesia",
    citycode: "BMU",
    desc: "BMU - SULTAN M.SALAHUDDIN, BIMA,Indonesia",
},{
    value: "BMV - BUON MA THUOT, BUON MA THUOT,Vietnam",
    citycode: "BMV",
    desc: "BMV - BUON MA THUOT, BUON MA THUOT,Vietnam",
},{
    value: "BMX - BIG MOUNTAIN, BIG MOUNTAIN,United States",
    citycode: "BMX",
    desc: "BMX - BIG MOUNTAIN, BIG MOUNTAIN,United States",
},{
    value: "BMW - BORDJ MOKHTAR, BORDJ MOKHTAR,Algeria",
    citycode: "BMW",
    desc: "BMW - BORDJ MOKHTAR, BORDJ MOKHTAR,Algeria",
},{
    value: "BMY - WAALA, ILE ART,New Caledonia",
    citycode: "BMY",
    desc: "BMY - WAALA, ILE ART,New Caledonia",
},{
    value: "BMZ - BAMU, BAMU,Papua New Guinea",
    citycode: "BMZ",
    desc: "BMZ - BAMU, BAMU,Papua New Guinea",
},{
    value: "BNA - NASHVILLE INTL AIRPORT, NASHVILLE,United States",
    citycode: "BNA",
    desc: "BNA - NASHVILLE INTL AIRPORT, NASHVILLE,United States",
},{
    value: "BNB - BOENDE, BOENDE,Democratic Republic of the Congo",
    citycode: "BNB",
    desc: "BNB - BOENDE, BOENDE,Democratic Republic of the Congo",
},{
    value: "BNC - MAVIVI, BENI,Congo, Democratic Rep.",
    citycode: "BNC",
    desc: "BNC - MAVIVI, BENI,Congo, Democratic Rep.",
},{
    value: "BND - BANDAR ABBAS INTL, BANDAR ABBAS,Iran",
    citycode: "BND",
    desc: "BND - BANDAR ABBAS INTL, BANDAR ABBAS,Iran",
},{
    value: "BNE - BRISBANE, BRISBANE,Australia",
    citycode: "BNE",
    desc: "BNE - BRISBANE, BRISBANE,Australia",
},{
    value: "BNF - WARM SPRING BAY, BARANOF,United States",
    citycode: "BNF",
    desc: "BNF - WARM SPRING BAY, BARANOF,United States",
},{
    value: "BNG - BANNING, BANNING,United States",
    citycode: "BNG",
    desc: "BNG - BANNING, BANNING,United States",
},{
    value: "BNI - BENIN CITY, BENIN CITY,Nigeria",
    citycode: "BNI",
    desc: "BNI - BENIN CITY, BENIN CITY,Nigeria",
},{
    value: "BNK - BYRON GATEWAY, BALLINA,Australia",
    citycode: "BNK",
    desc: "BNK - BYRON GATEWAY, BALLINA,Australia",
},{
    value: "BNL - BARNWELL CNTY, BARNWELL,United States",
    citycode: "BNL",
    desc: "BNL - BARNWELL CNTY, BARNWELL,United States",
},{
    value: "BNM - BODINUMU, BODINUMU,Papua New Guinea",
    citycode: "BNM",
    desc: "BNM - BODINUMU, BODINUMU,Papua New Guinea",
},{
    value: "BNN - BRONNOY, BRONNOYSUND,Norway",
    citycode: "BNN",
    desc: "BNN - BRONNOY, BRONNOYSUND,Norway",
},{
    value: "BNO - MUNICIPAL, BURNS,United States",
    citycode: "BNO",
    desc: "BNO - MUNICIPAL, BURNS,United States",
},{
    value: "BNP - BANNU, BANNU,Pakistan",
    citycode: "BNP",
    desc: "BNP - BANNU, BANNU,Pakistan",
},{
    value: "BNQ - BAGANGA, BAGANGA,Philippines",
    citycode: "BNQ",
    desc: "BNQ - BAGANGA, BAGANGA,Philippines",
},{
    value: "BNR - BANFORA, BANFORA,Burkina Faso",
    citycode: "BNR",
    desc: "BNR - BANFORA, BANFORA,Burkina Faso",
},{
    value: "BNS - BARINAS, BARINAS,Venezuela",
    citycode: "BNS",
    desc: "BNS - BARINAS, BARINAS,Venezuela",
},{
    value: "BNT - BUNDI, BUNDI,Papua New Guinea",
    citycode: "BNT",
    desc: "BNT - BUNDI, BUNDI,Papua New Guinea",
},{
    value: "BNU - BLUMENAU, BLUMENAU,Brazil",
    citycode: "BNU",
    desc: "BNU - BLUMENAU, BLUMENAU,Brazil",
},{
    value: "BNV - BOANA, BOANA,Papua New Guinea",
    citycode: "BNV",
    desc: "BNV - BOANA, BOANA,Papua New Guinea",
},{
    value: "BNX - INTERNATIONAL, BANJA LUKA,Bosnia and Herzegovina",
    citycode: "BNX",
    desc: "BNX - INTERNATIONAL, BANJA LUKA,Bosnia and Herzegovina",
},{
    value: "BNW - BOONE, BOONE,United States",
    citycode: "BNW",
    desc: "BNW - BOONE, BOONE,United States",
},{
    value: "BNY - ANUA, BELLONA,Solomon Islands",
    citycode: "BNY",
    desc: "BNY - ANUA, BELLONA,Solomon Islands",
},{
    value: "BNZ - BANZ, BANZ,Papua New Guinea",
    citycode: "BNZ",
    desc: "BNZ - BANZ, BANZ,Papua New Guinea",
},{
    value: "BOA - BOMA, BOMA,Congo Zaire",
    citycode: "BOA",
    desc: "BOA - BOMA, BOMA,Congo Zaire",
},{
    value: "BOB - MOTU MUTE, BORA BORA,French Polynesia",
    citycode: "BOB",
    desc: "BOB - MOTU MUTE, BORA BORA,French Polynesia",
},{
    value: "BOC - ISLA COLON INTL, BOCAS DEL TORO,Panama",
    citycode: "BOC",
    desc: "BOC - ISLA COLON INTL, BOCAS DEL TORO,Panama",
},{
    value: "BOD - MERIGNAC, BORDEAUX,France",
    citycode: "BOD",
    desc: "BOD - MERIGNAC, BORDEAUX,France",
},{
    value: "BOG - EL DORADO INTL, BOGOTA,Colombia",
    citycode: "BOG",
    desc: "BOG - EL DORADO INTL, BOGOTA,Colombia",
},{
    value: "BOH - BOURNEMOUTH INTL, BOURNEMOUTH,United Kingdom",
    citycode: "BOH",
    desc: "BOH - BOURNEMOUTH INTL, BOURNEMOUTH,United Kingdom",
},{
    value: "BOI - AIR TERM GOWEN FLD, BOISE,United States",
    citycode: "BOI",
    desc: "BOI - AIR TERM GOWEN FLD, BOISE,United States",
},{
    value: "BOJ - BURGAS, BURGAS,Bulgaria",
    citycode: "BOJ",
    desc: "BOJ - BURGAS, BURGAS,Bulgaria",
},{
    value: "BOK - BROOKINGS, BROOKINGS,United States",
    citycode: "BOK",
    desc: "BOK - BROOKINGS, BROOKINGS,United States",
},{
    value: "BOL - BALLYKELLY, BALLYKELLY,United Kingdom",
    citycode: "BOL",
    desc: "BOL - BALLYKELLY, BALLYKELLY,United Kingdom",
},{
    value: "BOM - CHHATRAPATI SHIVAJI, MUMBAI,India",
    citycode: "BOM",
    desc: "BOM - CHHATRAPATI SHIVAJI, MUMBAI,India",
},{
    value: "BON - FLAMINGO INTL, BONAIRE",
    citycode: "BON",
    desc: "BON - FLAMINGO INTL, BONAIRE",
},{
    value: "BOO - BODO, BODO,Norway",
    citycode: "BOO",
    desc: "BOO - BODO, BODO,Norway",
},{
    value: "BOP - BOUAR, BOUAR,Central African Republic",
    citycode: "BOP",
    desc: "BOP - BOUAR, BOUAR,Central African Republic",
},{
    value: "BOQ - BOKU, BOKU,Papua New Guinea",
    citycode: "BOQ",
    desc: "BOQ - BOKU, BOKU,Papua New Guinea",
},{
    value: "BOT - BOSET, BOSET,Papua New Guinea",
    citycode: "BOT",
    desc: "BOT - BOSET, BOSET,Papua New Guinea",
},{
    value: "BOU - BOURGES, BOURGES,France",
    citycode: "BOU",
    desc: "BOU - BOURGES, BOURGES,France",
},{
    value: "BOV - BOANG ISLAND, BOANG ISLAND,Papua New Guinea",
    citycode: "BOV",
    desc: "BOV - BOANG ISLAND, BOANG ISLAND,Papua New Guinea",
},{
    value: "BOX - BORROLOOLA, BORROLOOLA,Australia",
    citycode: "BOX",
    desc: "BOX - BORROLOOLA, BORROLOOLA,Australia",
},{
    value: "BOW - BARTOW, BARTOW,United States",
    citycode: "BOW",
    desc: "BOW - BARTOW, BARTOW,United States",
},{
    value: "BOY - BOBO DIOULASSO, BOBO DIOULASSO,Burkina Faso",
    citycode: "BOY",
    desc: "BOY - BOBO DIOULASSO, BOBO DIOULASSO,Burkina Faso",
},{
    value: "BOZ - BOZOUM, BOZOUM,Central African Republic",
    citycode: "BOZ",
    desc: "BOZ - BOZOUM, BOZOUM,Central African Republic",
},{
    value: "BPA - GRUMMAN, BETHPAGE,United States",
    citycode: "BPA",
    desc: "BPA - GRUMMAN, BETHPAGE,United States",
},{
    value: "BPB - BORIDI, BORIDI,Papua New Guinea",
    citycode: "BPB",
    desc: "BPB - BORIDI, BORIDI,Papua New Guinea",
},{
    value: "BPC - BAMENDA, BAMENDA,Cameroon",
    citycode: "BPC",
    desc: "BPC - BAMENDA, BAMENDA,Cameroon",
},{
    value: "BPD - BAPI, BAPI,Papua New Guinea",
    citycode: "BPD",
    desc: "BPD - BAPI, BAPI,Papua New Guinea",
},{
    value: "BPE - BEDAIHE, QINHUANGDAO,China",
    citycode: "BPE",
    desc: "BPE - BEDAIHE, QINHUANGDAO,China",
},{
    value: "BPF - BATUNA AERODROME, BATUNA,Solomon Islands",
    citycode: "BPF",
    desc: "BPF - BATUNA AERODROME, BATUNA,Solomon Islands",
},{
    value: "BPG - BARRA DO GARCAS, BARRA DO GARCAS,Brazil",
    citycode: "BPG",
    desc: "BPG - BARRA DO GARCAS, BARRA DO GARCAS,Brazil",
},{
    value: "BPH - BISLIG, BISLIG,Philippines",
    citycode: "BPH",
    desc: "BPH - BISLIG, BISLIG,Philippines",
},{
    value: "BPI - MILEY MEMORIAL FIELD, BIG PINEY MARBLETON,United States",
    citycode: "BPI",
    desc: "BPI - MILEY MEMORIAL FIELD, BIG PINEY MARBLETON,United States",
},{
    value: "BPL - ALASHANKOU, BOLE,China",
    citycode: "BPL",
    desc: "BPL - ALASHANKOU, BOLE,China",
},{
    value: "BPN - SEPINGGAN, BALIKPAPAN,Indonesia",
    citycode: "BPN",
    desc: "BPN - SEPINGGAN, BALIKPAPAN,Indonesia",
},{
    value: "BPS - PORTO SEGURO, PORTO SEGURO,Brazil",
    citycode: "BPS",
    desc: "BPS - PORTO SEGURO, PORTO SEGURO,Brazil",
},{
    value: "BPX - BAMDA/BANGDA, QAMDO/CHANGDU,China",
    citycode: "BPX",
    desc: "BPX - BAMDA/BANGDA, QAMDO/CHANGDU,China",
},{
    value: "BPY - BESALAMPY, BESALAMPY,Madagascar",
    citycode: "BPY",
    desc: "BPY - BESALAMPY, BESALAMPY,Madagascar",
},{
    value: "BQA - DR JUAN C ANGARA, BALER,Philippines",
    citycode: "BQA",
    desc: "BQA - DR JUAN C ANGARA, BALER,Philippines",
},{
    value: "BQB - BUSSELTON, BUSSELTON,Australia",
    citycode: "BQB",
    desc: "BQB - BUSSELTON, BUSSELTON,Australia",
},{
    value: "BQE - BUBAQUE, BUBAQUE,Guinea-Bissau",
    citycode: "BQE",
    desc: "BQE - BUBAQUE, BUBAQUE,Guinea-Bissau",
},{
    value: "BQG - BOGORODSKOYE, BOGORODSKOYE,Russia",
    citycode: "BQG",
    desc: "BQG - BOGORODSKOYE, BOGORODSKOYE,Russia",
},{
    value: "BQI - BAGANI, BAGANI,Namibia",
    citycode: "BQI",
    desc: "BQI - BAGANI, BAGANI,Namibia",
},{
    value: "BQJ - BATAGAY, BATAGAY,Russia",
    citycode: "BQJ",
    desc: "BQJ - BATAGAY, BATAGAY,Russia",
},{
    value: "BQL - BOULIA, BOULIA,Australia",
    citycode: "BQL",
    desc: "BQL - BOULIA, BOULIA,Australia",
},{
    value: "BQN - RAFAEL HERNANDEZ, AGUADILLA,Puerto Rico",
    citycode: "BQN",
    desc: "BQN - RAFAEL HERNANDEZ, AGUADILLA,Puerto Rico",
},{
    value: "BQO - TEHINI, BOUNA,Cote d Ivoire",
    citycode: "BQO",
    desc: "BQO - TEHINI, BOUNA,Cote d Ivoire",
},{
    value: "BQQ - BARRA, BARRA,Brazil",
    citycode: "BQQ",
    desc: "BQQ - BARRA, BARRA,Brazil",
},{
    value: "BQS - IGNATYEVO, BLAGOVESHCHENSK,Russia",
    citycode: "BQS",
    desc: "BQS - IGNATYEVO, BLAGOVESHCHENSK,Russia",
},{
    value: "BQT - BREST, BREST,Belarus",
    citycode: "BQT",
    desc: "BQT - BREST, BREST,Belarus",
},{
    value: "BQU - BEQUIA, BEQUIA,Saint Vincent and the Grenadines",
    citycode: "BQU",
    desc: "BQU - BEQUIA, BEQUIA,Saint Vincent and the Grenadines",
},{
    value: "BQW - BALGO HILL, BALGO HILL,Australia",
    citycode: "BQW",
    desc: "BQW - BALGO HILL, BALGO HILL,Australia",
},{
    value: "BRA - BARREIRAS, BARREIRAS,Brazil",
    citycode: "BRA",
    desc: "BRA - BARREIRAS, BARREIRAS,Brazil",
},{
    value: "BRB - BARREIRINHAS, BARREIRINHAS,Brazil",
    citycode: "BRB",
    desc: "BRB - BARREIRINHAS, BARREIRINHAS,Brazil",
},{
    value: "BRC - INTERNATIONAL, SAN CARLOS BARILOCHE,Argentina",
    citycode: "BRC",
    desc: "BRC - INTERNATIONAL, SAN CARLOS BARILOCHE,Argentina",
},{
    value: "BRD - CROW WING CNTY, BRAINERD,United States",
    citycode: "BRD",
    desc: "BRD - CROW WING CNTY, BRAINERD,United States",
},{
    value: "BRE - BREMEN, BREMEN,Germany",
    citycode: "BRE",
    desc: "BRE - BREMEN, BREMEN,Germany",
},{
    value: "BRF - LEEDS/BRADFORD, LEEDS/BRADFORD,United Kingdom",
    citycode: "BRF",
    desc: "BRF - LEEDS/BRADFORD, LEEDS/BRADFORD,United Kingdom",
},{
    value: "BRG - WHITESBURG MNPL, WHITESBURG,United States",
    citycode: "BRG",
    desc: "BRG - WHITESBURG MNPL, WHITESBURG,United States",
},{
    value: "BRH - BRAHAM, BRAHAM,Papua New Guinea",
    citycode: "BRH",
    desc: "BRH - BRAHAM, BRAHAM,Papua New Guinea",
},{
    value: "BRI - PALESE, BARI,Italy",
    citycode: "BRI",
    desc: "BRI - PALESE, BARI,Italy",
},{
    value: "BRJ - BRIGHT, BRIGHT,Australia",
    citycode: "BRJ",
    desc: "BRJ - BRIGHT, BRIGHT,Australia",
},{
    value: "BRK - BOURKE, BOURKE,Australia",
    citycode: "BRK",
    desc: "BRK - BOURKE, BOURKE,Australia",
},{
    value: "BRL - BURLINGTON, BURLINGTON,United States",
    citycode: "BRL",
    desc: "BRL - BURLINGTON, BURLINGTON,United States",
},{
    value: "BRM - JACINTO LARA INTL, BARQUISIMETO,Venezuela",
    citycode: "BRM",
    desc: "BRM - JACINTO LARA INTL, BARQUISIMETO,Venezuela",
},{
    value: "BRN - BELP, BERN,Switzerland",
    citycode: "BRN",
    desc: "BRN - BELP, BERN,Switzerland",
},{
    value: "BRO - SOUTH PADRE, BROWNSVILLE,United States",
    citycode: "BRO",
    desc: "BRO - SOUTH PADRE, BROWNSVILLE,United States",
},{
    value: "BRP - BIARU, BIARU,Papua New Guinea",
    citycode: "BRP",
    desc: "BRP - BIARU, BIARU,Papua New Guinea",
},{
    value: "BRQ - TURANY, BRNO,Czech Republic",
    citycode: "BRQ",
    desc: "BRQ - TURANY, BRNO,Czech Republic",
},{
    value: "BRR - BARRA, BARRA,United Kingdom",
    citycode: "BRR",
    desc: "BRR - BARRA, BARRA,United Kingdom",
},{
    value: "BRS - BRISTOL INTL, BRISTOL,United Kingdom",
    citycode: "BRS",
    desc: "BRS - BRISTOL INTL, BRISTOL,United Kingdom",
},{
    value: "BRT - BATHURST ISLAND, BATHURST ISLAND,Australia",
    citycode: "BRT",
    desc: "BRT - BATHURST ISLAND, BATHURST ISLAND,Australia",
},{
    value: "BRV - BREMERHAVEN, BREMERHAVEN,Germany",
    citycode: "BRV",
    desc: "BRV - BREMERHAVEN, BREMERHAVEN,Germany",
},{
    value: "BRX - MARIA MONTEZ INTL, BARAHONA,Dominican Republic",
    citycode: "BRX",
    desc: "BRX - MARIA MONTEZ INTL, BARAHONA,Dominican Republic",
},{
    value: "BRW - W.POST W.ROGERS MEM, BARROW,United States",
    citycode: "BRW",
    desc: "BRW - W.POST W.ROGERS MEM, BARROW,United States",
},{
    value: "BRY - SAMUELS FIELD, BARDSTOWN,United States",
    citycode: "BRY",
    desc: "BRY - SAMUELS FIELD, BARDSTOWN,United States",
},{
    value: "BSA - INTERNATIONAL, BOSASO,Somalia",
    citycode: "BSA",
    desc: "BSA - INTERNATIONAL, BOSASO,Somalia",
},{
    value: "BSB - J.KUBITSCHEK INTL, BRASILIA,Brazil",
    citycode: "BSB",
    desc: "BSB - J.KUBITSCHEK INTL, BRASILIA,Brazil",
},{
    value: "BSC - JOSE CELESTINO MUTIS, BAHIA SOLANO,Colombia",
    citycode: "BSC",
    desc: "BSC - JOSE CELESTINO MUTIS, BAHIA SOLANO,Colombia",
},{
    value: "BSD - BAOSHAN, BAOSHAN,China",
    citycode: "BSD",
    desc: "BSD - BAOSHAN, BAOSHAN,China",
},{
    value: "BSE - SEMATAN, SEMATAN,Malaysia",
    citycode: "BSE",
    desc: "BSE - SEMATAN, SEMATAN,Malaysia",
},{
    value: "BSF - BRADSHAW AAF, POHAKULOA,United States",
    citycode: "BSF",
    desc: "BSF - BRADSHAW AAF, POHAKULOA,United States",
},{
    value: "BSG - BATA, BATA,Equatorial Guinea",
    citycode: "BSG",
    desc: "BSG - BATA, BATA,Equatorial Guinea",
},{
    value: "BSH - BRIGHTON, BRIGHTON,United Kingdom",
    citycode: "BSH",
    desc: "BSH - BRIGHTON, BRIGHTON,United Kingdom",
},{
    value: "BSI - BLAIRSVILLE, BLAIRSVILLE,United States",
    citycode: "BSI",
    desc: "BSI - BLAIRSVILLE, BLAIRSVILLE,United States",
},{
    value: "BSJ - BAIRNSDALE, BAIRNSDALE,Australia",
    citycode: "BSJ",
    desc: "BSJ - BAIRNSDALE, BAIRNSDALE,Australia",
},{
    value: "BSK - MOHAMED KHIDER, BISKRA,Algeria",
    citycode: "BSK",
    desc: "BSK - MOHAMED KHIDER, BISKRA,Algeria",
},{
    value: "BSM - BISHEN KOLA, BISHEN KOLA,Iran",
    citycode: "BSM",
    desc: "BSM - BISHEN KOLA, BISHEN KOLA,Iran",
},{
    value: "BSN - BOSSANGOA, BOSSANGOA,Central African Republic",
    citycode: "BSN",
    desc: "BSN - BOSSANGOA, BOSSANGOA,Central African Republic",
},{
    value: "BSO - BASCO, BASCO,Philippines",
    citycode: "BSO",
    desc: "BSO - BASCO, BASCO,Philippines",
},{
    value: "BSP - BENSBACH, BENSBACH,Papua New Guinea",
    citycode: "BSP",
    desc: "BSP - BENSBACH, BENSBACH,Papua New Guinea",
},{
    value: "BSQ - BISBEE MUNICIPAL, BISBEE,United States",
    citycode: "BSQ",
    desc: "BSQ - BISBEE MUNICIPAL, BISBEE,United States",
},{
    value: "BSR - BASRAH INTERNATIONAL, BASRAH,Iraq",
    citycode: "BSR",
    desc: "BSR - BASRAH INTERNATIONAL, BASRAH,Iraq",
},{
    value: "BSS - BALSAS, BALSAS,Brazil",
    citycode: "BSS",
    desc: "BSS - BALSAS, BALSAS,Brazil",
},{
    value: "BST - BOST, LASHKAR GAH,Afghanistan",
    citycode: "BST",
    desc: "BST - BOST, LASHKAR GAH,Afghanistan",
},{
    value: "BSU - BASANKUSU, BASANKUSU",
    citycode: "BSU",
    desc: "BSU - BASANKUSU, BASANKUSU",
},{
    value: "BSV - BESAKOA, BESAKOA,Madagascar",
    citycode: "BSV",
    desc: "BSV - BESAKOA, BESAKOA,Madagascar",
},{
    value: "BSX - PATHEIN, PATHEIN,Myanmar (Burma)",
    citycode: "BSX",
    desc: "BSX - PATHEIN, PATHEIN,Myanmar (Burma)",
},{
    value: "BSW - BOSWELL BAY, BOSWELL BAY,United States",
    citycode: "BSW",
    desc: "BSW - BOSWELL BAY, BOSWELL BAY,United States",
},{
    value: "BSY - BARDERA, BARDERA,Somalia",
    citycode: "BSY",
    desc: "BSY - BARDERA, BARDERA,Somalia",
},{
    value: "BTA - BERTOUA, BERTOUA,Cameroon",
    citycode: "BTA",
    desc: "BTA - BERTOUA, BERTOUA,Cameroon",
},{
    value: "BTC - AIRPORT, BATTICALOA,Sri Lanka",
    citycode: "BTC",
    desc: "BTC - AIRPORT, BATTICALOA,Sri Lanka",
},{
    value: "BTD - BRUNETTE DOWNS, BRUNETTE DOWNS,Australia",
    citycode: "BTD",
    desc: "BTD - BRUNETTE DOWNS, BRUNETTE DOWNS,Australia",
},{
    value: "BTE - SHERBRO INTL, BONTHE,Sierra Leone",
    citycode: "BTE",
    desc: "BTE - SHERBRO INTL, BONTHE,Sierra Leone",
},{
    value: "BTF - SKYPARK, BOUNTIFUL,United States",
    citycode: "BTF",
    desc: "BTF - SKYPARK, BOUNTIFUL,United States",
},{
    value: "BTG - BATANGAFO, BATANGAFO,Central African Republic",
    citycode: "BTG",
    desc: "BTG - BATANGAFO, BATANGAFO,Central African Republic",
},{
    value: "BTH - HANG NADIM, BATU BESAR,Indonesia",
    citycode: "BTH",
    desc: "BTH - HANG NADIM, BATU BESAR,Indonesia",
},{
    value: "BTI - BARTER ISLAND, BARTER ISLAND,United States",
    citycode: "BTI",
    desc: "BTI - BARTER ISLAND, BARTER ISLAND,United States",
},{
    value: "BTJ - SULTAN ISKANDAR MUDA, BANDA ACEH,Indonesia",
    citycode: "BTJ",
    desc: "BTJ - SULTAN ISKANDAR MUDA, BANDA ACEH,Indonesia",
},{
    value: "BTK - BRATSK, BRATSK,Russia",
    citycode: "BTK",
    desc: "BTK - BRATSK, BRATSK,Russia",
},{
    value: "BTL - WK KELLOGG, BATTLE CREEK,United States",
    citycode: "BTL",
    desc: "BTL - WK KELLOGG, BATTLE CREEK,United States",
},{
    value: "BTM - BERT MOONEY, BUTTE,United States",
    citycode: "BTM",
    desc: "BTM - BERT MOONEY, BUTTE,United States",
},{
    value: "BTN - BENNETTSVILLE, BENNETTSVILLE,United States",
    citycode: "BTN",
    desc: "BTN - BENNETTSVILLE, BENNETTSVILLE,United States",
},{
    value: "BTO - BOTOPASI, BOTOPASI,Suriname",
    citycode: "BTO",
    desc: "BTO - BOTOPASI, BOTOPASI,Suriname",
},{
    value: "BTP - GRAHAM FIELD, BUTLER,United States",
    citycode: "BTP",
    desc: "BTP - GRAHAM FIELD, BUTLER,United States",
},{
    value: "BTQ - BUTARE, BUTARE,Rwanda",
    citycode: "BTQ",
    desc: "BTQ - BUTARE, BUTARE,Rwanda",
},{
    value: "BTS - M R STEFANIK, BRATISLAVA,Slovakia",
    citycode: "BTS",
    desc: "BTS - M R STEFANIK, BRATISLAVA,Slovakia",
},{
    value: "BTT - BETTLES, BETTLES,United States",
    citycode: "BTT",
    desc: "BTT - BETTLES, BETTLES,United States",
},{
    value: "BTU - BINTULU AIRPORT, BINTULU,Malaysia",
    citycode: "BTU",
    desc: "BTU - BINTULU AIRPORT, BINTULU,Malaysia",
},{
    value: "BTV - BURLINGTON INTL, BURLINGTON,United States",
    citycode: "BTV",
    desc: "BTV - BURLINGTON INTL, BURLINGTON,United States",
},{
    value: "BTX - BETOOTA, BETOOTA,Australia",
    citycode: "BTX",
    desc: "BTX - BETOOTA, BETOOTA,Australia",
},{
    value: "BTW - BATU LICIN, BATU LICIN,Indonesia",
    citycode: "BTW",
    desc: "BTW - BATU LICIN, BATU LICIN,Indonesia",
},{
    value: "BTY - BEATTY, BEATTY,United States",
    citycode: "BTY",
    desc: "BTY - BEATTY, BEATTY,United States",
},{
    value: "BUA - BUKA, BUKA,Papua New Guinea",
    citycode: "BUA",
    desc: "BUA - BUKA, BUKA,Papua New Guinea",
},{
    value: "BUB - BURWELL MNPL, BURWELL,United States",
    citycode: "BUB",
    desc: "BUB - BURWELL MNPL, BURWELL,United States",
},{
    value: "BUC - BURKETOWN, BURKETOWN,Australia",
    citycode: "BUC",
    desc: "BUC - BURKETOWN, BURKETOWN,Australia",
},{
    value: "BUD - LISZT FERENC INTL, BUDAPEST,Hungary",
    citycode: "BUD",
    desc: "BUD - LISZT FERENC INTL, BUDAPEST,Hungary",
},{
    value: "BUF - BUFFALO NIAGARA INTL, BUFFALO,United States",
    citycode: "BUF",
    desc: "BUF - BUFFALO NIAGARA INTL, BUFFALO,United States",
},{
    value: "BUG - 17 DE SETEMBRO, BENGUELA,Angola",
    citycode: "BUG",
    desc: "BUG - 17 DE SETEMBRO, BENGUELA,Angola",
},{
    value: "BUI - BOKONDINI, BOKONDINI,Indonesia",
    citycode: "BUI",
    desc: "BUI - BOKONDINI, BOKONDINI,Indonesia",
},{
    value: "BUJ - BOU SAADA, BOU SAADA,Algeria",
    citycode: "BUJ",
    desc: "BUJ - BOU SAADA, BOU SAADA,Algeria",
},{
    value: "BUK - AL BUQ, AL BUQ,Yemen",
    citycode: "BUK",
    desc: "BUK - AL BUQ, AL BUQ,Yemen",
},{
    value: "BUL - BULOLO, BULOLO,Papua New Guinea",
    citycode: "BUL",
    desc: "BUL - BULOLO, BULOLO,Papua New Guinea",
},{
    value: "BUM - BUTLER, BUTLER,United States",
    citycode: "BUM",
    desc: "BUM - BUTLER, BUTLER,United States",
},{
    value: "BUN - GERARDO TOBAR LOPEZ, BUENAVENTURA,Colombia",
    citycode: "BUN",
    desc: "BUN - GERARDO TOBAR LOPEZ, BUENAVENTURA,Colombia",
},{
    value: "BUO - BURAO, BURAO,Somalia",
    citycode: "BUO",
    desc: "BUO - BURAO, BURAO,Somalia",
},{
    value: "BUP - BHATINDA, BHATINDA,India",
    citycode: "BUP",
    desc: "BUP - BHATINDA, BHATINDA,India",
},{
    value: "BUQ - JOSHUA M.NKOMO INTL, BULAWAYO,Zimbabwe",
    citycode: "BUQ",
    desc: "BUQ - JOSHUA M.NKOMO INTL, BULAWAYO,Zimbabwe",
},{
    value: "BUR - BOB HOPE APT, BURBANK,United States",
    citycode: "BUR",
    desc: "BUR - BOB HOPE APT, BURBANK,United States",
},{
    value: "BUS - BATUMI, BATUMI,Georgia",
    citycode: "BUS",
    desc: "BUS - BATUMI, BATUMI,Georgia",
},{
    value: "BUT - BATHPALATHANG, JAKAR,Bhutan",
    citycode: "BUT",
    desc: "BUT - BATHPALATHANG, JAKAR,Bhutan",
},{
    value: "BUV - PLACERES, BELLA UNION,Uruguay",
    citycode: "BUV",
    desc: "BUV - PLACERES, BELLA UNION,Uruguay",
},{
    value: "BUX - BUNIA, BUNIA,Congo(Zaire)",
    citycode: "BUX",
    desc: "BUX - BUNIA, BUNIA,Congo(Zaire)",
},{
    value: "BUW - BETOAMBARI, BAUBAU,Indonesia",
    citycode: "BUW",
    desc: "BUW - BETOAMBARI, BAUBAU,Indonesia",
},{
    value: "BUY - BUNBURY, BUNBURY,Australia",
    citycode: "BUY",
    desc: "BUY - BUNBURY, BUNBURY,Australia",
},{
    value: "BUZ - BUSHEHR, BUSHEHR,Iran",
    citycode: "BUZ",
    desc: "BUZ - BUSHEHR, BUSHEHR,Iran",
},{
    value: "BVC - RABIL, BOA VISTA ISLAND,Cape Verde",
    citycode: "BVC",
    desc: "BVC - RABIL, BOA VISTA ISLAND,Cape Verde",
},{
    value: "BVD - SEA PORT, BEAVER INLET,United States",
    citycode: "BVD",
    desc: "BVD - SEA PORT, BEAVER INLET,United States",
},{
    value: "BVE - VALLEE DE LA DORDOGNE, BRIVE LA GAILLARD,France",
    citycode: "BVE",
    desc: "BVE - VALLEE DE LA DORDOGNE, BRIVE LA GAILLARD,France",
},{
    value: "BVF - DAMA, BUA,Fiji",
    citycode: "BVF",
    desc: "BVF - DAMA, BUA,Fiji",
},{
    value: "BVG - BERLEVAG, BERLEVAG,Norway",
    citycode: "BVG",
    desc: "BVG - BERLEVAG, BERLEVAG,Norway",
},{
    value: "BVH - BRIGADEIRO CAMARAO, VILHENA,Brazil",
    citycode: "BVH",
    desc: "BVH - BRIGADEIRO CAMARAO, VILHENA,Brazil",
},{
    value: "BVI - BIRDSVILLE, BIRDSVILLE,Australia",
    citycode: "BVI",
    desc: "BVI - BIRDSVILLE, BIRDSVILLE,Australia",
},{
    value: "BVK - HUACARAJE, HUACARAJE,Bolivia",
    citycode: "BVK",
    desc: "BVK - HUACARAJE, HUACARAJE,Bolivia",
},{
    value: "BVL - BAURES, BAURES,Bolivia",
    citycode: "BVL",
    desc: "BVL - BAURES, BAURES,Bolivia",
},{
    value: "BVM - BELMONTE, BELMONTE,Brazil",
    citycode: "BVM",
    desc: "BVM - BELMONTE, BELMONTE,Brazil",
},{
    value: "BVO - MUNICIPAL, BARTLESVILLE,United States",
    citycode: "BVO",
    desc: "BVO - MUNICIPAL, BARTLESVILLE,United States",
},{
    value: "BVP - BOLOVIP, BOLOVIP,Papua New Guinea",
    citycode: "BVP",
    desc: "BVP - BOLOVIP, BOLOVIP,Papua New Guinea",
},{
    value: "BVR - ESPERADINHA, BRAVA ISLAND,Cape Verde",
    citycode: "BVR",
    desc: "BVR - ESPERADINHA, BRAVA ISLAND,Cape Verde",
},{
    value: "BVS - BREVES, BREVES,Brazil",
    citycode: "BVS",
    desc: "BVS - BREVES, BREVES,Brazil",
},{
    value: "BVU - BELUGA, BELUGA,United States",
    citycode: "BVU",
    desc: "BVU - BELUGA, BELUGA,United States",
},{
    value: "BVX - BATESVILLE MNPL, BATESVILLE,United States",
    citycode: "BVX",
    desc: "BVX - BATESVILLE MNPL, BATESVILLE,United States",
},{
    value: "BVW - BATAVIA DOWNS, BATAVIA DOWNS,Australia",
    citycode: "BVW",
    desc: "BVW - BATAVIA DOWNS, BATAVIA DOWNS,Australia",
},{
    value: "BVY - BEVERLY, BEVERLY,United States",
    citycode: "BVY",
    desc: "BVY - BEVERLY, BEVERLY,United States",
},{
    value: "BVZ - BEVERLEY SPRINGS, BEVERLEY SPRINGS,Australia",
    citycode: "BVZ",
    desc: "BVZ - BEVERLEY SPRINGS, BEVERLEY SPRINGS,Australia",
},{
    value: "BXA - GEORGE R CARR, BOGALUSA,United States",
    citycode: "BXA",
    desc: "BXA - GEORGE R CARR, BOGALUSA,United States",
},{
    value: "BXB - BABO, IRARUTU,Indonesia",
    citycode: "BXB",
    desc: "BXB - BABO, IRARUTU,Indonesia",
},{
    value: "BXC - BOXBOROUGH, BOXBOROUGH,United States",
    citycode: "BXC",
    desc: "BXC - BOXBOROUGH, BOXBOROUGH,United States",
},{
    value: "BXD - BADE, BADE,Indonesia",
    citycode: "BXD",
    desc: "BXD - BADE, BADE,Indonesia",
},{
    value: "BXE - BAKEL, BAKEL,Senegal",
    citycode: "BXE",
    desc: "BXE - BAKEL, BAKEL,Senegal",
},{
    value: "BXF - BELLBURN, BELLBURN,Australia",
    citycode: "BXF",
    desc: "BXF - BELLBURN, BELLBURN,Australia",
},{
    value: "BXG - BENDIGO, BENDIGO,Australia",
    citycode: "BXG",
    desc: "BXG - BENDIGO, BENDIGO,Australia",
},{
    value: "BXH - BALHASH, BALHASH,Kazakhstan",
    citycode: "BXH",
    desc: "BXH - BALHASH, BALHASH,Kazakhstan",
},{
    value: "BXI - BOUNDIALI, BOUNDIALI,Cote d Ivoire",
    citycode: "BXI",
    desc: "BXI - BOUNDIALI, BOUNDIALI,Cote d Ivoire",
},{
    value: "BXK - MUNICIPAL, BUCKEYE,United States",
    citycode: "BXK",
    desc: "BXK - MUNICIPAL, BUCKEYE,United States",
},{
    value: "BXL - BLUE LAGOON SPB, NANUYA LAGOON,Fiji",
    citycode: "BXL",
    desc: "BXL - BLUE LAGOON SPB, NANUYA LAGOON,Fiji",
},{
    value: "BXM - BATOM, BATOM,Indonesia",
    citycode: "BXM",
    desc: "BXM - BATOM, BATOM,Indonesia",
},{
    value: "BXO - BUOCHS, BUOCHS,Switzerland",
    citycode: "BXO",
    desc: "BXO - BUOCHS, BUOCHS,Switzerland",
},{
    value: "BXP - BIALA PODLASKA, BIALA PODLASKA,Poland",
    citycode: "BXP",
    desc: "BXP - BIALA PODLASKA, BIALA PODLASKA,Poland",
},{
    value: "BXR - BAM, BAM,Iran",
    citycode: "BXR",
    desc: "BXR - BAM, BAM,Iran",
},{
    value: "BXS - BORREGO VALLEY, BORREGO SPRINGS,United States",
    citycode: "BXS",
    desc: "BXS - BORREGO VALLEY, BORREGO SPRINGS,United States",
},{
    value: "BXT - BONTANG, BONTANG,Indonesia",
    citycode: "BXT",
    desc: "BXT - BONTANG, BONTANG,Indonesia",
},{
    value: "BXU - BANCASI, BUTUAN,Philippines",
    citycode: "BXU",
    desc: "BXU - BANCASI, BUTUAN,Philippines",
},{
    value: "BXV - BREIDDALSVIK, BREIDDALSVIK,Iceland",
    citycode: "BXV",
    desc: "BXV - BREIDDALSVIK, BREIDDALSVIK,Iceland",
},{
    value: "BXX - BORAMA, BORAMA,Somalia",
    citycode: "BXX",
    desc: "BXX - BORAMA, BORAMA,Somalia",
},{
    value: "BXZ - BUNSIL, BUNSIL,Papua New Guinea",
    citycode: "BXZ",
    desc: "BXZ - BUNSIL, BUNSIL,Papua New Guinea",
},{
    value: "BWA - GAUTAM BUDDHA, BHAIRAHAWA,Nepal",
    citycode: "BWA",
    desc: "BWA - GAUTAM BUDDHA, BHAIRAHAWA,Nepal",
},{
    value: "BWB - BARROW ISLAND, BARROW ISLAND,Australia",
    citycode: "BWB",
    desc: "BWB - BARROW ISLAND, BARROW ISLAND,Australia",
},{
    value: "BWC - MUNICIPAL, BRAWLEY,United States",
    citycode: "BWC",
    desc: "BWC - MUNICIPAL, BRAWLEY,United States",
},{
    value: "BWD - BROWNWOOD, BROWNWOOD,United States",
    citycode: "BWD",
    desc: "BWD - BROWNWOOD, BROWNWOOD,United States",
},{
    value: "BWE - BRAUNSCHWEIG, BRAUNSCHWEIG/WOLFSBURG,Germany",
    citycode: "BWE",
    desc: "BWE - BRAUNSCHWEIG, BRAUNSCHWEIG/WOLFSBURG,Germany",
},{
    value: "BWF - BARROW IN FURNESS, BARROW IN FURNESS,United Kingdom",
    citycode: "BWF",
    desc: "BWF - BARROW IN FURNESS, BARROW IN FURNESS,United Kingdom",
},{
    value: "BWG - WARREN CNT, BOWLING GREEN,United States",
    citycode: "BWG",
    desc: "BWG - WARREN CNT, BOWLING GREEN,United States",
},{
    value: "BWJ - BAWAN, BAWAN,Papua New Guinea",
    citycode: "BWJ",
    desc: "BWJ - BAWAN, BAWAN,Papua New Guinea",
},{
    value: "BWK - BOL, BRAC,Croatia",
    citycode: "BWK",
    desc: "BWK - BOL, BRAC,Croatia",
},{
    value: "BWL - BLACKWELL TONKAWA MUNI, BLACKWELL,United States",
    citycode: "BWL",
    desc: "BWL - BLACKWELL TONKAWA MUNI, BLACKWELL,United States",
},{
    value: "BWM - BOWMAN, BOWMAN,United States",
    citycode: "BWM",
    desc: "BWM - BOWMAN, BOWMAN,United States",
},{
    value: "BWN - BRUNEI INTL, BANDAR SERI BEGAWAN,Brunei",
    citycode: "BWN",
    desc: "BWN - BRUNEI INTL, BANDAR SERI BEGAWAN,Brunei",
},{
    value: "BWO - BALAKOVO, BALAKOVO,Russia",
    citycode: "BWO",
    desc: "BWO - BALAKOVO, BALAKOVO,Russia",
},{
    value: "BWP - BEWANI, BEWANI,Papua New Guinea",
    citycode: "BWP",
    desc: "BWP - BEWANI, BEWANI,Papua New Guinea",
},{
    value: "BWQ - BREWARRINA, BREWARRINA,Australia",
    citycode: "BWQ",
    desc: "BWQ - BREWARRINA, BREWARRINA,Australia",
},{
    value: "BWS - BLAINE, BLAINE,United States",
    citycode: "BWS",
    desc: "BWS - BLAINE, BLAINE,United States",
},{
    value: "BWT - WYNYARD, BURNIE,Australia",
    citycode: "BWT",
    desc: "BWT - WYNYARD, BURNIE,Australia",
},{
    value: "BWX - BLIMBINGSARI, BANYUWANGI,Indonesia",
    citycode: "BWX",
    desc: "BWX - BLIMBINGSARI, BANYUWANGI,Indonesia",
},{
    value: "BWW - LAS BRUJAS, CAYO LAS BRUJAS,Cuba",
    citycode: "BWW",
    desc: "BWW - LAS BRUJAS, CAYO LAS BRUJAS,Cuba",
},{
    value: "BYA - BOUNDARY, BOUNDARY,United States",
    citycode: "BYA",
    desc: "BYA - BOUNDARY, BOUNDARY,United States",
},{
    value: "BYB - DIBA AL BAYAH, DIBA AL BAYAH,Oman",
    citycode: "BYB",
    desc: "BYB - DIBA AL BAYAH, DIBA AL BAYAH,Oman",
},{
    value: "BYC - YACUIBA, YACUIBA,Bolivia",
    citycode: "BYC",
    desc: "BYC - YACUIBA, YACUIBA,Bolivia",
},{
    value: "BYD - AL BAYDA, AL BAYDA,Yemen",
    citycode: "BYD",
    desc: "BYD - AL BAYDA, AL BAYDA,Yemen",
},{
    value: "BYF - BRAY, ALBERT,France",
    citycode: "BYF",
    desc: "BYF - BRAY, ALBERT,France",
},{
    value: "BYG - JOHNSON COUNTY, BUFFALO,United States",
    citycode: "BYG",
    desc: "BYG - JOHNSON COUNTY, BUFFALO,United States",
},{
    value: "BYI - BURLEY MUNICIPAL, BURLEY RUPERT,United States",
    citycode: "BYI",
    desc: "BYI - BURLEY MUNICIPAL, BURLEY RUPERT,United States",
},{
    value: "BYJ - INTERNATIONAL, BEJA,Portugal",
    citycode: "BYJ",
    desc: "BYJ - INTERNATIONAL, BEJA,Portugal",
},{
    value: "BYK - BOUAKE, BOUAKE,Cote d Ivoire",
    citycode: "BYK",
    desc: "BYK - BOUAKE, BOUAKE,Cote d Ivoire",
},{
    value: "BYL - BELLE YELLA, BELLE YELLA,Liberia",
    citycode: "BYL",
    desc: "BYL - BELLE YELLA, BELLE YELLA,Liberia",
},{
    value: "BYM - CARLOS M. DE CESPEDES, BAYAMO,Cuba",
    citycode: "BYM",
    desc: "BYM - CARLOS M. DE CESPEDES, BAYAMO,Cuba",
},{
    value: "BYN - BAYANKHONGOR, BAYANKHONGOR,Mongolia",
    citycode: "BYN",
    desc: "BYN - BAYANKHONGOR, BAYANKHONGOR,Mongolia",
},{
    value: "BYO - BONITO, BONITO,Brazil",
    citycode: "BYO",
    desc: "BYO - BONITO, BONITO,Brazil",
},{
    value: "BYP - BARIMUNYA, BARIMUNYA,Australia",
    citycode: "BYP",
    desc: "BYP - BARIMUNYA, BARIMUNYA,Australia",
},{
    value: "BYQ - BUNYU, BUNYU,Indonesia",
    citycode: "BYQ",
    desc: "BYQ - BUNYU, BUNYU,Indonesia",
},{
    value: "BYR - LAESO, LAESO,Denmark",
    citycode: "BYR",
    desc: "BYR - LAESO, LAESO,Denmark",
},{
    value: "BYS - BICYCLE LAKE AAF, FORT IRWIN BARSTOW,United States",
    citycode: "BYS",
    desc: "BYS - BICYCLE LAKE AAF, FORT IRWIN BARSTOW,United States",
},{
    value: "BYT - BANTRY, BANTRY,Ireland",
    citycode: "BYT",
    desc: "BYT - BANTRY, BANTRY,Ireland",
},{
    value: "BYU - BINDLACHER BERG, BAYREUTH,Germany",
    citycode: "BYU",
    desc: "BYU - BINDLACHER BERG, BAYREUTH,Germany",
},{
    value: "BYX - BANIYALA, BANIYALA,Australia",
    citycode: "BYX",
    desc: "BYX - BANIYALA, BANIYALA,Australia",
},{
    value: "BYW - BLAKELY ISLAND, BLAKELY ISLAND,United States",
    citycode: "BYW",
    desc: "BYW - BLAKELY ISLAND, BLAKELY ISLAND,United States",
},{
    value: "BZA - SAN PEDRO, BONANZA,Nicaragua",
    citycode: "BZA",
    desc: "BZA - SAN PEDRO, BONANZA,Nicaragua",
},{
    value: "BZB - BAZARUTO ISLAND, BAZARUTO ISLAND,Mozambique",
    citycode: "BZB",
    desc: "BZB - BAZARUTO ISLAND, BAZARUTO ISLAND,Mozambique",
},{
    value: "BZC - UMBERTO MODIANO, BUZIOS,Brazil",
    citycode: "BZC",
    desc: "BZC - UMBERTO MODIANO, BUZIOS,Brazil",
},{
    value: "BZD - BALRANALD, BALRANALD,Australia",
    citycode: "BZD",
    desc: "BZD - BALRANALD, BALRANALD,Australia",
},{
    value: "BZG - IGNACY JAN PADEREWSKI, BYDGOSZCZ,Poland",
    citycode: "BZG",
    desc: "BZG - IGNACY JAN PADEREWSKI, BYDGOSZCZ,Poland",
},{
    value: "BZH - BUMI HILLS AIRFIELD, BUMI HILLS,Zimbabwe",
    citycode: "BZH",
    desc: "BZH - BUMI HILLS AIRFIELD, BUMI HILLS,Zimbabwe",
},{
    value: "BZI - BALIKESIR, BALIKESIR,Turkey",
    citycode: "BZI",
    desc: "BZI - BALIKESIR, BALIKESIR,Turkey",
},{
    value: "BZK - BRYANSK, BRYANSK,Russia",
    citycode: "BZK",
    desc: "BZK - BRYANSK, BRYANSK,Russia",
},{
    value: "BZL - BARISAL, BARISAL,Bangladesh",
    citycode: "BZL",
    desc: "BZL - BARISAL, BARISAL,Bangladesh",
},{
    value: "BZN - YELLOWSTONE INTL, BOZEMAN,United States",
    citycode: "BZN",
    desc: "BZN - YELLOWSTONE INTL, BOZEMAN,United States",
},{
    value: "BZO - DOLOMITI, BOLZANO BOZEN,Italy",
    citycode: "BZO",
    desc: "BZO - DOLOMITI, BOLZANO BOZEN,Italy",
},{
    value: "BZP - BIZANT, BIZANT,Australia",
    citycode: "BZP",
    desc: "BZP - BIZANT, BIZANT,Australia",
},{
    value: "BZR - VIAS, BEZIERS,France",
    citycode: "BZR",
    desc: "BZR - VIAS, BEZIERS,France",
},{
    value: "BZT - HINKLES FERRY, BRAZORIA,United States",
    citycode: "BZT",
    desc: "BZT - HINKLES FERRY, BRAZORIA,United States",
},{
    value: "BZU - ZEGA, BUTA,Congo Zaire",
    citycode: "BZU",
    desc: "BZU - ZEGA, BUTA,Congo Zaire",
},{
    value: "BZY - INTERNATIONAL, BALTI,Moldova",
    citycode: "BZY",
    desc: "BZY - INTERNATIONAL, BALTI,Moldova",
},{
    value: "BZZ - RAF STATION, BRIZE NORTON,United Kingdom",
    citycode: "BZZ",
    desc: "BZZ - RAF STATION, BRIZE NORTON,United Kingdom",
},{
    value: "CAA - EL AGUACATE, CATACAMAS,Honduras",
    citycode: "CAA",
    desc: "CAA - EL AGUACATE, CATACAMAS,Honduras",
},{
    value: "CAB - CABINDA, CABINDA,Angola",
    citycode: "CAB",
    desc: "CAB - CABINDA, CABINDA,Angola",
},{
    value: "CAC - A.MENDES DA SILVA, CASCAVEL,Brazil",
    citycode: "CAC",
    desc: "CAC - A.MENDES DA SILVA, CASCAVEL,Brazil",
},{
    value: "CAD - CADILLAC, CADILLAC,United States",
    citycode: "CAD",
    desc: "CAD - CADILLAC, CADILLAC,United States",
},{
    value: "CAF - CARAUARI, CARAUARI,Brazil",
    citycode: "CAF",
    desc: "CAF - CARAUARI, CARAUARI,Brazil",
},{
    value: "CAG - ELMAS, CAGLIARI,Italy",
    citycode: "CAG",
    desc: "CAG - ELMAS, CAGLIARI,Italy",
},{
    value: "CAH - CA MAU, CA MAU,Vietnam",
    citycode: "CAH",
    desc: "CAH - CA MAU, CA MAU,Vietnam",
},{
    value: "CAI - CAIRO INTL, CAIRO,Egypt",
    citycode: "CAH",
    desc: "CAI - CAIRO INTL, CAIRO,Egypt",
},{
    value: "CAJ - CANAIMA, CANAIMA,Venezuela",
    citycode: "CAJ",
    desc: "CAJ - CANAIMA, CANAIMA,Venezuela",
},{
    value: "CAL - CAMPBELTOWN, CAMPBELTOWN,United Kingdom",
    citycode: "CAL",
    desc: "CAL - CAMPBELTOWN, CAMPBELTOWN,United Kingdom",
},{
    value: "CAM - CAMIRI, CAMIRI,Bolivia",
    citycode: "CAM",
    desc: "CAM - CAMIRI, CAMIRI,Bolivia",
},{
    value: "CAN - BAIYUN INTL, GUANGZHOU,China",
    citycode: "CAN",
    desc: "CAN - BAIYUN INTL, GUANGZHOU,China",
},{
    value: "CAO - MUNICIPAL AIRPARK, CLAYTON,United States",
    citycode: "CAO",
    desc: "CAO - MUNICIPAL AIRPARK, CLAYTON,United States",
},{
    value: "CAP - HUGO CHAVEZ INTL, CAP HAITIEN,Haiti",
    citycode: "CAP",
    desc: "CAP - HUGO CHAVEZ INTL, CAP HAITIEN,Haiti",
},{
    value: "CAQ - JUAN H WHITE, CAUCASIA,Colombia",
    citycode: "CAQ",
    desc: "CAQ - JUAN H WHITE, CAUCASIA,Colombia",
},{
    value: "CAR - CARIBOU MNPL, CARIBOU,United States",
    citycode: "CAR",
    desc: "CAR - CARIBOU MNPL, CARIBOU,United States",
},{
    value: "CAU - OSCAR LARANJEIRAS, CARUARU,Brazil",
    citycode: "CAU",
    desc: "CAU - OSCAR LARANJEIRAS, CARUARU,Brazil",
},{
    value: "CAV - CAZOMBO, CAZOMBO,Angola",
    citycode: "CAV",
    desc: "CAV - CAZOMBO, CAZOMBO,Angola",
},{
    value: "CAX - CARLISLE, CARLISLE,United Kingdom",
    citycode: "CAX",
    desc: "CAX - CARLISLE, CARLISLE,United Kingdom",
},{
    value: "CAW - BARTOLOMEU LISAND, CAMPOS,Brazil",
    citycode: "CAW",
    desc: "CAW - BARTOLOMEU LISAND, CAMPOS,Brazil",
},{
    value: "CAY - FELIX EBOUE, CAYENNE,French Guiana",
    citycode: "CAW",
    desc: "CAY - FELIX EBOUE, CAYENNE,French Guiana",
},{
    value: "CAZ - COBAR, COBAR,Australia",
    citycode: "CAZ",
    desc: "CAZ - COBAR, COBAR,Australia",
},{
    value: "CBB - JORGE WILSTERMANN INTL, COCHABAMBA,Bolivia",
    citycode: "CBB",
    desc: "CBB - JORGE WILSTERMANN INTL, COCHABAMBA,Bolivia",
},{
    value: "CBC - CHERRABUN, CHERRABUN,Australia",
    citycode: "CBC",
    desc: "CBC - CHERRABUN, CHERRABUN,Australia",
},{
    value: "CBD - AFB, CAR NICOBAR ISLAND,India",
    citycode: "CBD",
    desc: "CBD - AFB, CAR NICOBAR ISLAND,India",
},{
    value: "CBE - WILEY FORD, CUMBERLAND,United States",
    citycode: "CBE",
    desc: "CBE - WILEY FORD, CUMBERLAND,United States",
},{
    value: "CBF - COUNCIL BLUFFS MNPL, COUNCIL BLUFFS,United States",
    citycode: "CBF",
    desc: "CBF - COUNCIL BLUFFS MNPL, COUNCIL BLUFFS,United States",
},{
    value: "CBG - CAMBRIDGE, CAMBRIDGE,United Kingdom",
    citycode: "CBG",
    desc: "CBG - CAMBRIDGE, CAMBRIDGE,United Kingdom",
},{
    value: "CBH - BOUDGHENE B ALI LOTFI, BECHAR,Algeria",
    citycode: "CBH",
    desc: "CBH - BOUDGHENE B ALI LOTFI, BECHAR,Algeria",
},{
    value: "CBI - CAPE BARREN, CAPE BARREN,Australia",
    citycode: "CBI",
    desc: "CBI - CAPE BARREN, CAPE BARREN,Australia",
},{
    value: "CBJ - CABO ROJO, PEDERNALES,Dominican Republic",
    citycode: "CBJ",
    desc: "CBJ - CABO ROJO, PEDERNALES,Dominican Republic",
},{
    value: "CBK - COLBY MNPL, COLBY,United States",
    citycode: "CBK",
    desc: "CBK - COLBY MNPL, COLBY,United States",
},{
    value: "CBL - TOMAS DE HERES, CIUDAD BOLIVAR,Venezuela",
    citycode: "CBL",
    desc: "CBL - TOMAS DE HERES, CIUDAD BOLIVAR,Venezuela",
},{
    value: "CBN - CAKRABHUWANA, CIREBON,Indonesia",
    citycode: "CBN",
    desc: "CBN - CAKRABHUWANA, CIREBON,Indonesia",
},{
    value: "CBO - AWANG, COTABATO,Philippines",
    citycode: "CBO",
    desc: "CBO - AWANG, COTABATO,Philippines",
},{
    value: "CBP - COIMBRA, COIMBRA,Portugal",
    citycode: "CBP",
    desc: "CBP - COIMBRA, COIMBRA,Portugal",
},{
    value: "CBQ - MARGARET EKPO INTL, CALABAR,Nigeria",
    citycode: "CBQ",
    desc: "CBQ - MARGARET EKPO INTL, CALABAR,Nigeria",
},{
    value: "CBR - CANBERRA, CANBERRA,Australia",
    citycode: "CBR",
    desc: "CBR - CANBERRA, CANBERRA,Australia",
},{
    value: "CBS - ORO NEGRO, CABIMAS,Venezuela",
    citycode: "CBS",
    desc: "CBS - ORO NEGRO, CABIMAS,Venezuela",
},{
    value: "CBT - CATUMBELA, CATUMBELA,Angola",
    citycode: "CBT",
    desc: "CBT - CATUMBELA, CATUMBELA,Angola",
},{
    value: "CBU - DREWITZ APT, COTTBUS,Germany",
    citycode: "CBU",
    desc: "CBU - DREWITZ APT, COTTBUS,Germany",
},{
    value: "CBV - COBAN, COBAN,Guatemala",
    citycode: "CBV",
    desc: "CBV - COBAN, COBAN,Guatemala",
},{
    value: "CBX - CONDOBOLIN, CONDOBOLIN,Australia",
    citycode: "CBX",
    desc: "CBX - CONDOBOLIN, CONDOBOLIN,Australia",
},{
    value: "CBW - G.GUIAS DE AQUINO, CAMPO MOURAO,Brazil",
    citycode: "CBW",
    desc: "CBW - G.GUIAS DE AQUINO, CAMPO MOURAO,Brazil",
},{
    value: "CBY - CANOBIE, CANOBIE,Australia",
    citycode: "CBY",
    desc: "CBY - CANOBIE, CANOBIE,Australia",
},{
    value: "CCA - CHAFFEE AFB, FORT CHAFFEE,United States",
    citycode: "CCA",
    desc: "CCA - CHAFFEE AFB, FORT CHAFFEE,United States",
},{
    value: "CCB - CABLE, UPLAND,United States",
    citycode: "CCB",
    desc: "CCB - CABLE, UPLAND,United States",
},{
    value: "CCC - JARDINES DEL REY, CAYO COCO,Cuba",
    citycode: "CCC",
    desc: "CCC - JARDINES DEL REY, CAYO COCO,Cuba",
},{
    value: "CCF - SALVAZA, CARCASSONNE,France",
    citycode: "CCF",
    desc: "CCF - SALVAZA, CARCASSONNE,France",
},{
    value: "CCG - CRANE COUNTY APT, CRANE,United States",
    citycode: "CCG",
    desc: "CCG - CRANE COUNTY APT, CRANE,United States",
},{
    value: "CCH - CHILE CHICO, CHILE CHICO,Chile",
    citycode: "CCH",
    desc: "CCH - CHILE CHICO, CHILE CHICO,Chile",
},{
    value: "CCI - OLAVO CECCO RIGON, CONCORDIA,Brazil",
    citycode: "CCI",
    desc: "CCI - OLAVO CECCO RIGON, CONCORDIA,Brazil",
},{
    value: "CCJ - INTERNATIONAL, KOZHIKODE,India",
    citycode: "CCJ",
    desc: "CCJ - INTERNATIONAL, KOZHIKODE,India",
},{
    value: "CCK - COCOS ISLANDS, COCOS ISLANDS,Cocos (Keeling) Islands",
    citycode: "CCK",
    desc: "CCK - COCOS ISLANDS, COCOS ISLANDS,Cocos (Keeling) Islands",
},{
    value: "CCL - CHINCHILLA, CHINCHILLA,Australia",
    citycode: "CCL",
    desc: "CCL - CHINCHILLA, CHINCHILLA,Australia",
},{
    value: "CCM - DIOMCIO FREITAS, CRICIUMA,Brazil",
    citycode: "CCM",
    desc: "CCM - DIOMCIO FREITAS, CRICIUMA,Brazil",
},{
    value: "CCN - CHAGHCHARAN, CHAGHCHARAN,Afghanistan",
    citycode: "CCN",
    desc: "CCN - CHAGHCHARAN, CHAGHCHARAN,Afghanistan",
},{
    value: "CCO - CARIMAGUA, CARIMAGUA,Colombia",
    citycode: "CCO",
    desc: "CCO - CARIMAGUA, CARIMAGUA,Colombia",
},{
    value: "CCP - CARRIEL SUR, CONCEPCION,Chile",
    citycode: "CCP",
    desc: "CCP - CARRIEL SUR, CONCEPCION,Chile",
},{
    value: "CCR - BUCHANAN FLD, CONCORD,United States",
    citycode: "CCR",
    desc: "CCR - BUCHANAN FLD, CONCORD,United States",
},{
    value: "CCS - SIMON BOLIVAR INTL, CARACAS,Venezuela",
    citycode: "CCS",
    desc: "CCS - SIMON BOLIVAR INTL, CARACAS,Venezuela",
},{
    value: "CCT - COLONIA CATRIEL, CATRIEL,Argentina",
    citycode: "CCT",
    desc: "CCT - COLONIA CATRIEL, CATRIEL,Argentina",
},{
    value: "CCU - SUBHAS CHANDRA BOSE, KOLKATA,India",
    citycode: "CCU",
    desc: "CCU - SUBHAS CHANDRA BOSE, KOLKATA,India",
},{
    value: "CCV - CRAIG COVE, CRAIG COVE,Vanuatu",
    citycode: "CCV",
    desc: "CCV - CRAIG COVE, CRAIG COVE,Vanuatu",
},{
    value: "CCX - CACERES, CACERES,Brazil",
    citycode: "CCX",
    desc: "CCX - CACERES, CACERES,Brazil",
},{
    value: "CCW - COWELL, COWELL,Australia",
    citycode: "CCW",
    desc: "CCW - COWELL, COWELL,Australia",
},{
    value: "CCY - CHARLES CITY MNPL, CHARLES CITY,United States",
    citycode: "CCY",
    desc: "CCY - CHARLES CITY MNPL, CHARLES CITY,United States",
},{
    value: "CDA - COOINDA, COOINDA,Australia",
    citycode: "CDA",
    desc: "CDA - COOINDA, COOINDA,Australia",
},{
    value: "CDB - COLD BAY, COLD BAY,United States",
    citycode: "CDB",
    desc: "CDB - COLD BAY, COLD BAY,United States",
},{
    value: "CDC - REGIONAL, CEDAR CITY,United States",
    citycode: "CDC",
    desc: "CDC - REGIONAL, CEDAR CITY,United States",
},{
    value: "CDD - CAUQUIRA AIRPORT, CAUQUIRA,Honduras",
    citycode: "CDD",
    desc: "CDD - CAUQUIRA AIRPORT, CAUQUIRA,Honduras",
},{
    value: "CDH - HARRELL FLD, CAMDEN,United States",
    citycode: "CDH",
    desc: "CDH - HARRELL FLD, CAMDEN,United States",
},{
    value: "CDI - RAIMUNDO DE ANDRADE, CACHOEIRO DE ITAPEMIRIM,Brazil",
    citycode: "CDI",
    desc: "CDI - RAIMUNDO DE ANDRADE, CACHOEIRO DE ITAPEMIRIM,Brazil",
},{
    value: "CDJ - CONCEICAO DO ARAGUAIA, CONCEICAO DO ARAGUAIA,Brazil",
    citycode: "CDJ",
    desc: "CDJ - CONCEICAO DO ARAGUAIA, CONCEICAO DO ARAGUAIA,Brazil",
},{
    value: "CDK - LEWIS, CEDAR KEY,United States",
    citycode: "CDK",
    desc: "CDK - LEWIS, CEDAR KEY,United States",
},{
    value: "CDL - CANDLE, CANDLE,United States",
    citycode: "CDL",
    desc: "CDL - CANDLE, CANDLE,United States",
},{
    value: "CDN - WOODWARD FLD, CAMDEN,United States",
    citycode: "CDN",
    desc: "CDN - WOODWARD FLD, CAMDEN,United States",
},{
    value: "CDO - CRADOCK, CRADOCK,South Africa",
    citycode: "CDO",
    desc: "CDO - CRADOCK, CRADOCK,South Africa",
},{
    value: "CDP - CUDDAPAH, CUDDAPAH,India",
    citycode: "CDP",
    desc: "CDP - CUDDAPAH, CUDDAPAH,India",
},{
    value: "CDQ - CROYDON, CROYDON,Australia",
    citycode: "CDQ",
    desc: "CDQ - CROYDON, CROYDON,Australia",
},{
    value: "CDR - CHADRON, CHADRON,United States",
    citycode: "CDR",
    desc: "CDR - CHADRON, CHADRON,United States",
},{
    value: "CDS - CHILDRESS, CHILDRESS,United States",
    citycode: "CDS",
    desc: "CDS - CHILDRESS, CHILDRESS,United States",
},{
    value: "CDT - CASTELLON, CASTELLON DE LA PLANA,Spain",
    citycode: "CDT",
    desc: "CDT - CASTELLON, CASTELLON DE LA PLANA,Spain",
},{
    value: "CDU - CAMDEN, CAMDEN,Australia",
    citycode: "CDU",
    desc: "CDU - CAMDEN, CAMDEN,Australia",
},{
    value: "CDW - CALDWELL WRIGHT, CALDWELL,United States",
    citycode: "CDW",
    desc: "CDW - CALDWELL WRIGHT, CALDWELL,United States",
},{
    value: "CDY - CAGAYAN DE SULU, MAPUN,Philippines",
    citycode: "CDY",
    desc: "CDY - CAGAYAN DE SULU, MAPUN,Philippines",
},{
    value: "CEB - MACTAN INTERNATIONAL, CEBU,Philippines",
    citycode: "CEB",
    desc: "CEB - MACTAN INTERNATIONAL, CEBU,Philippines",
},{
    value: "CEC - DEL NORTE COUNTY RGNL, CRESCENT CITY,United States",
    citycode: "CEC",
    desc: "CEC - DEL NORTE COUNTY RGNL, CRESCENT CITY,United States",
},{
    value: "CED - CEDUNA, CEDUNA,Australia",
    citycode: "CED",
    desc: "CED - CEDUNA, CEDUNA,Australia",
},{
    value: "CEE - CHEREPOVETS, CHEREPOVETS,Russia",
    citycode: "CEE",
    desc: "CEE - CHEREPOVETS, CHEREPOVETS,Russia",
},{
    value: "CEF - WESTOVER METRO, SPRINGFIELD,United States",
    citycode: "SFY",
    desc: "CEF - WESTOVER METRO, SPRINGFIELD,United States",
},{
    value: "CEG - HAWARDEN, CHESTER,United Kingdom",
    citycode: "CEG",
    desc: "CEG - HAWARDEN, CHESTER,United Kingdom",
},{
    value: "CEH - CHELINDA, CHELINDA,Malawi",
    citycode: "CEH",
    desc: "CEH - CHELINDA, CHELINDA,Malawi",
},{
    value: "CEI - MAE FAH LUANG INTL, CHIANG RAI,Thailand",
    citycode: "CEI",
    desc: "CEI - MAE FAH LUANG INTL, CHIANG RAI,Thailand",
},{
    value: "CEK - BALANDINO, CHELYABINSK,Russia",
    citycode: "CEK",
    desc: "CEK - BALANDINO, CHELYABINSK,Russia",
},{
    value: "CEM - CENTRAL, CENTRAL,United States",
    citycode: "CEM",
    desc: "CEM - CENTRAL, CENTRAL,United States",
},{
    value: "CEN - INTERNATIONAL, CIUDAD OBREGON,Mexico",
    citycode: "CEN",
    desc: "CEN - INTERNATIONAL, CIUDAD OBREGON,Mexico",
},{
    value: "CEO - WAKU KUNGO, WAKU KUNGO,Angola",
    citycode: "CEO",
    desc: "CEO - WAKU KUNGO, WAKU KUNGO,Angola",
},{
    value: "CEP - CONCEPCION, CONCEPCION,Bolivia",
    citycode: "CEP",
    desc: "CEP - CONCEPCION, CONCEPCION,Bolivia",
},{
    value: "CEQ - MANDELIEU, CANNES,France",
    citycode: "CEQ",
    desc: "CEQ - MANDELIEU, CANNES,France",
},{
    value: "CER - MAUPERTUS, CHERBOURG,France",
    citycode: "CER",
    desc: "CER - MAUPERTUS, CHERBOURG,France",
},{
    value: "CES - CESSNOCK, CESSNOCK,Australia",
    citycode: "CES",
    desc: "CES - CESSNOCK, CESSNOCK,Australia",
},{
    value: "CET - LE PONTREAU, CHOLET,France",
    citycode: "CET",
    desc: "CET - LE PONTREAU, CHOLET,France",
},{
    value: "CEU - OCONEE COUNTY, CLEMSON,United States",
    citycode: "CEU",
    desc: "CEU - OCONEE COUNTY, CLEMSON,United States",
},{
    value: "CEV - METTLE FLD, CONNERSVILLE,United States",
    citycode: "CEV",
    desc: "CEV - METTLE FLD, CONNERSVILLE,United States",
},{
    value: "CEX - CHENA HOT SPRINGS, CHENA HOT SPRINGS,United States",
    citycode: "CEX",
    desc: "CEX - CHENA HOT SPRINGS, CHENA HOT SPRINGS,United States",
},{
    value: "CEW - BOB SIKES, CRESTVIEW,United States",
    citycode: "CEW",
    desc: "CEW - BOB SIKES, CRESTVIEW,United States",
},{
    value: "CEY - CALLOWAY COUNTY, MURRAY,United States",
    citycode: "CEY",
    desc: "CEY - CALLOWAY COUNTY, MURRAY,United States",
},{
    value: "CEZ - CORTEZ MUNICIPAL, CORTEZ,United States",
    citycode: "CEZ",
    desc: "CEZ - CORTEZ MUNICIPAL, CORTEZ,United States",
},{
    value: "CFA - COFFEE POINT, COFFEE POINT,United States",
    citycode: "CFA",
    desc: "CFA - COFFEE POINT, COFFEE POINT,United States",
},{
    value: "CFB - INTERNATIONAL, CABO FRIO,Brazil",
    citycode: "CFB",
    desc: "CFB - INTERNATIONAL, CABO FRIO,Brazil",
},{
    value: "CFC - C.A DA COSTA NEVES, CACADOR,Brazil",
    citycode: "CFC",
    desc: "CFC - C.A DA COSTA NEVES, CACADOR,Brazil",
},{
    value: "CFD - COULTER FIELD, BRYAN,United States",
    citycode: "CFD",
    desc: "CFD - COULTER FIELD, BRYAN,United States",
},{
    value: "CFE - AUVERGNE, CLERMONT FERRAND,France",
    citycode: "CFE",
    desc: "CFE - AUVERGNE, CLERMONT FERRAND,France",
},{
    value: "CFE - AUVERGNE, CLERMONT FERRAND,France",
    citycode: "CFE",
    desc: "CFE - AUVERGNE, CLERMONT FERRAND,France",
},{
    value: "CFF - CAFUNFO, CAFUNFO,Angola",
    citycode: "CFF",
    desc: "CFF - CAFUNFO, CAFUNFO,Angola",
},{
    value: "CFG - JAIME GONZALEZ, CIENFUEGOS,Cuba",
    citycode: "CFG",
    desc: "CFG - JAIME GONZALEZ, CIENFUEGOS,Cuba",
},{
    value: "CFH - CLIFTON HILLS, CLIFTON HILLS,Australia",
    citycode: "CFH",
    desc: "CFH - CLIFTON HILLS, CLIFTON HILLS,Australia",
},{
    value: "CFH - CLIFTON HILLS, CLIFTON HILLS,Australia",
    citycode: "CFH",
    desc: "CFH - CLIFTON HILLS, CLIFTON HILLS,Australia",
},{
    value: "CFI - CAMFIELD STATION, CAMFIELD STATION,Australia",
    citycode: "CFI",
    desc: "CFI - CAMFIELD STATION, CAMFIELD STATION,Australia",
},{
    value: "CFK - ABOUBAKR BELKAID, CHLEF,Algeria",
    citycode: "CFK",
    desc: "CFK - ABOUBAKR BELKAID, CHLEF,Algeria",
},{
    value: "CFN - DONEGAL, DONEGAL,Ireland",
    citycode: "CFN",
    desc: "CFN - DONEGAL, DONEGAL,Ireland",
},{
    value: "CFO - CONFRESA, CONFRESA,Brazil",
    citycode: "CFO",
    desc: "CFO - CONFRESA, CONFRESA,Brazil",
},{
    value: "CFP - CARPENTARIA DOWNS, CARPENTARIA DOWNS,Australia",
    citycode: "CFP",
    desc: "CFP - CARPENTARIA DOWNS, CARPENTARIA DOWNS,Australia",
},{
    value: "CFQ - CRESTON, CRESTON,Canada",
    citycode: "CFQ",
    desc: "CFQ - CRESTON, CRESTON,Canada",
},{
    value: "CFR - CARPIQUET, CAEN,France",
    citycode: "CFR",
    desc: "CFR - CARPIQUET, CAEN,France",
},{
    value: "CFS - COFFS HARBOUR, COFFS HARBOUR,Australia",
    citycode: "CFS",
    desc: "CFS - COFFS HARBOUR, COFFS HARBOUR,Australia",
},{
    value: "CFT - GREENLEE COUNTY, CLIFTON MORENCI,United States",
    citycode: "CFT",
    desc: "CFT - GREENLEE COUNTY, CLIFTON MORENCI,United States",
},{
    value: "CFU - IOANNIS KAPODISTRIAS, KERKYRA,Greece",
    citycode: "CFU",
    desc: "CFU - IOANNIS KAPODISTRIAS, KERKYRA,Greece",
},{
    value: "CFV - COFFEYVILLE MNPL, COFFEYVILLE,United States",
    citycode: "CFV",
    desc: "CFV - COFFEYVILLE MNPL, COFFEYVILLE,United States",
},{
    value: "CGA - CRAIG SPB, CRAIG,United States",
    citycode: "CGA",
    desc: "CGA - CRAIG SPB, CRAIG,United States",
},{
    value: "CGB - MARECHAL RONDON INTL, CUIABA,Brazil",
    citycode: "CGB",
    desc: "CGB - MARECHAL RONDON INTL, CUIABA,Brazil",
},{
    value: "CGC - CAPE GLOUCESTER, CAPE GLOUCESTER,Papua New Guinea",
    citycode: "CGC",
    desc: "CGC - CAPE GLOUCESTER, CAPE GLOUCESTER,Papua New Guinea",
},{
    value: "CGD - TAOHUAYUAN, CHANGDE,China",
    citycode: "CGD",
    desc: "CGD - TAOHUAYUAN, CHANGDE,China",
},{
    value: "CGE - CAMBRIDGE, CAMBRIDGE,United States",
    citycode: "CGE",
    desc: "CGE - CAMBRIDGE, CAMBRIDGE,United States",
},{
    value: "CGF - CUYAHOGA, CLEVELAND,United States",
    citycode: "CLE",
    desc: "CGF - CUYAHOGA, CLEVELAND,United States",
},{
    value: "CGG - CASIGURAN, CASIGURAN,Philippines",
    citycode: "CGG",
    desc: "CGG - CASIGURAN, CASIGURAN,Philippines",
},{
    value: "CGH - CONGONHAS, SAO PAULO,Brazil",
    citycode: "SAO",
    desc: "CGH - CONGONHAS, SAO PAULO,Brazil",
},{
    value: "CGI - CAPE GIRARDEAU, CAPE GIRARDEAU,United States",
    citycode: "CGI",
    desc: "CGI - CAPE GIRARDEAU, CAPE GIRARDEAU,United States",
},{
    value: "CGJ - KASOMPE, CHINGOLA,Zambia",
    citycode: "CGJ",
    desc: "CGJ - KASOMPE, CHINGOLA,Zambia",
},{
    value: "CGK - SOEKARNO HATTA INTL, JAKARTA,Indonesia",
    citycode: "JKT",
    desc: "CGK - SOEKARNO HATTA INTL, JAKARTA,Indonesia",
},{
    value: "CGM - MAMBAJAO, CAMIGUIN,Philippines",
    citycode: "CGM",
    desc: "CGM - MAMBAJAO, CAMIGUIN,Philippines",
},{
    value: "CGN - COLOGNE/BONN, COLOGNE/BONN,Germany",
    citycode: "CGN",
    desc: "CGN - COLOGNE/BONN, COLOGNE/BONN,Germany",
},{
    value: "CGP - SHAH AMANAT INTL, CHITTAGONG,Bangladesh",
    citycode: "CGP",
    desc: "CGP - SHAH AMANAT INTL, CHITTAGONG,Bangladesh",
},{
    value: "CGQ - LONGJIA INTL, CHANGCHUN,China",
    citycode: "CGQ",
    desc: "CGQ - LONGJIA INTL, CHANGCHUN,China",
},{
    value: "CGR - CAMPO GRANDE INTL, CAMPO GRANDE,Brazil",
    citycode: "CGR",
    desc: "CGR - CAMPO GRANDE INTL, CAMPO GRANDE,Brazil",
},{
    value: "CGS - COLLEGE PARK, COLLEGE PARK,United States",
    citycode: "CGS",
    desc: "CGS - COLLEGE PARK, COLLEGE PARK,United States",
},{
    value: "CGT - CHINGUETTI, CHINGUETTI,Mauritania",
    citycode: "CGT",
    desc: "CGT - CHINGUETTI, CHINGUETTI,Mauritania",
},{
    value: "CGV - CAIGUNA, CAIGUNA,Australia",
    citycode: "CGV",
    desc: "CGV - CAIGUNA, CAIGUNA,Australia",
},{
    value: "CGX - MERRILL C MEIGS, CHICAGO,United States",
    citycode: "CHI",
    desc: "CGX - MERRILL C MEIGS, CHICAGO,United States",
},{
    value: "CGY - LAGUINDINGAN INTL, CAGAYAN DE ORO,Philippines",
    citycode: "CGY",
    desc: "CGY - LAGUINDINGAN INTL, CAGAYAN DE ORO,Philippines",
},{
    value: "CGZ - CASA GRANDE MNPL, CASA GRANDE,United States",
    citycode: "CGZ",
    desc: "CGZ - CASA GRANDE MNPL, CASA GRANDE,United States",
},{
    value: "CHA - LOVELL FIELD, CHATTANOOGA,United States",
    citycode: "CHA",
    desc: "CHA - LOVELL FIELD, CHATTANOOGA,United States",
},{
    value: "CHB - CHILAS, CHILAS,Pakistan",
    citycode: "CHB",
    desc: "CHB - CHILAS, CHILAS,Pakistan",
},{
    value: "CHC - CHRISTCHURCH, CHRISTCHURCH,New Zealand",
    citycode: "CHC",
    desc: "CHC - CHRISTCHURCH, CHRISTCHURCH,New Zealand",
},{
    value: "CHG - CHAOYANG AIRPORT, CHAOYANG,China",
    citycode: "CHG",
    desc: "CHG - CHAOYANG AIRPORT, CHAOYANG,China",
},{
    value: "CHH - CHACHAPOYAS, CHACHAPOYAS,Peru",
    citycode: "CHH",
    desc: "CHH - CHACHAPOYAS, CHACHAPOYAS,Peru",
},{
    value: "CHJ - CHIPINGE, CHIPINGE,Zimbabwe",
    citycode: "CHJ",
    desc: "CHJ - CHIPINGE, CHIPINGE,Zimbabwe",
},{
    value: "CHK - CHICKASHA MNPL, CHICKASHA,United States",
    citycode: "CHK",
    desc: "CHK - CHICKASHA MNPL, CHICKASHA,United States",
},{
    value: "CHL - CHALLIS, CHALLIS,United States",
    citycode: "CHL",
    desc: "CHL - CHALLIS, CHALLIS,United States",
},{
    value: "CHM - J MONTREUIL MORALES, CHIMBOTE,Peru",
    citycode: "CHM",
    desc: "CHM - J MONTREUIL MORALES, CHIMBOTE,Peru",
},{
    value: "CHO - ALBEMARL, CHARLOTTESVILLE,United States",
    citycode: "CHO",
    desc: "CHO - ALBEMARL, CHARLOTTESVILLE,United States",
},{
    value: "CHP - CIRCLE HOT SPRING, CIRCLE HOT SPRING,United States",
    citycode: "CHP",
    desc: "CHP - CIRCLE HOT SPRING, CIRCLE HOT SPRING,United States",
},{
    value: "CHQ - I DASKALOGIANNIS, CHANIA,Greece",
    citycode: "CHQ",
    desc: "CHQ - I DASKALOGIANNIS, CHANIA,Greece",
},{
    value: "CHR - DEOLS, CHATEAUROUX,France",
    citycode: "CHR",
    desc: "CHR - DEOLS, CHATEAUROUX,France",
},{
    value: "CHS - INTERNATIONAL AFB, CHARLESTON,United States",
    citycode: "CHS",
    desc: "CHS - INTERNATIONAL AFB, CHARLESTON,United States",
},{
    value: "CHT - TUUTA, CHATHAM ISLAND,New Zealand",
    citycode: "CHT",
    desc: "CHT - TUUTA, CHATHAM ISLAND,New Zealand",
},{
    value: "CHU - CHUATHBALUK, CHUATHBALUK,United States",
    citycode: "CHU",
    desc: "CHU - CHUATHBALUK, CHUATHBALUK,United States",
},{
    value: "CHV - CHAVES, CHAVES,Portugal",
    citycode: "CHV",
    desc: "CHV - CHAVES, CHAVES,Portugal",
},{
    value: "CHX - MANUEL NINO INTL, CHANGUINOLA,Panama",
    citycode: "CHX",
    desc: "CHX - MANUEL NINO INTL, CHANGUINOLA,Panama",
},{
    value: "CHY - CHOISEUL BAY, CHOISEUL BAY,Solomon Islands",
    citycode: "CHY",
    desc: "CHY - CHOISEUL BAY, CHOISEUL BAY,Solomon Islands",
},{
    value: "CHZ - STATE, CHILOQUIN,United States",
    citycode: "CHZ",
    desc: "CHZ - STATE, CHILOQUIN,United States",
},{
    value: "CIA - CIAMPINO, ROME,Italy",
    citycode: "ROM",
    desc: "CIA - CIAMPINO, ROME,Italy",
},{
    value: "CIB - APT IN THE SKY, AVALON,United States",
    citycode: "AVX",
    desc: "CIB - APT IN THE SKY, AVALON,United States",
},{
    value: "CIC - MUNICIPAL, CHICO,United States",
    citycode: "CIC",
    desc: "CIC - MUNICIPAL, CHICO,United States",
},{
    value: "CID - CEDAR RAPIDS, CEDAR RAPIDS,United States",
    citycode: "CID",
    desc: "CID - CEDAR RAPIDS, CEDAR RAPIDS,United States",
},{
    value: "CIE - COLLIE, COLLIE,Australia",
    citycode: "CIE",
    desc: "CIE - COLLIE, COLLIE,Australia",
},{
    value: "CIF - YULONG, CHIFENG,China",
    citycode: "CIF",
    desc: "CIF - YULONG, CHIFENG,China",
},{
    value: "CIG - CRAIG MOFFAT, CRAIG,United States",
    citycode: "CIG",
    desc: "CIG - CRAIG MOFFAT, CRAIG,United States",
},{
    value: "CIH - WANGCUN, CHANGZHI,China",
    citycode: "CIH",
    desc: "CIH - WANGCUN, CHANGZHI,China",
},{
    value: "CII - CILDIR, AYDIN,Turkey",
    citycode: "CII",
    desc: "CII - CILDIR, AYDIN,Turkey",
},{
    value: "CIJ - CAPTAIN ANIBAL ARAB, COBIJA,Bolivia",
    citycode: "CIJ",
    desc: "CIJ - CAPTAIN ANIBAL ARAB, COBIJA,Bolivia",
},{
    value: "CIK - CHALKYITSIK, CHALKYITSIK,United States",
    citycode: "CIK",
    desc: "CIK - CHALKYITSIK, CHALKYITSIK,United States",
},{
    value: "CIL - COUNCIL, COUNCIL,United States",
    citycode: "CIL",
    desc: "CIL - COUNCIL, COUNCIL,United States",
},{
    value: "CIM - CIMITARRA, CIMITARRA,Colombia",
    citycode: "CIM",
    desc: "CIM - CIMITARRA, CIMITARRA,Colombia",
},{
    value: "CIN - CARROLL, CARROLL,United States",
    citycode: "CIN",
    desc: "CIN - CARROLL, CARROLL,United States",
},{
    value: "CIO - CARMELO PERALTA, CONCEPCION,Paraguay",
    citycode: "CIO",
    desc: "CIO - CARMELO PERALTA, CONCEPCION,Paraguay", 
},{
    value: "CIP - CHIPATA, CHIPATA,Zambia",
    citycode: "CIP",
    desc: "CIP - CHIPATA, CHIPATA,Zambia",
},{
    value: "CIQ - CHIQUIMULA, CHIQUIMULA,Guatemala",
    citycode: "CIQ",
    desc: "CIQ - CHIQUIMULA, CHIQUIMULA,Guatemala",
},{
    value: "CIR - CAIRO, CAIRO,United States",
    citycode: "CIR",
    desc: "CIR - CAIRO, CAIRO,United States",
},{
    value: "CIS - CANTON ISLAND, CANTON ISLAND,Kiribati",
    citycode: "CIS",
    desc: "CIS - CANTON ISLAND, CANTON ISLAND,Kiribati",
},{
    value: "CIT - INTERNATIONAL, SHYMKENT,Kazakhstan",
    citycode: "CIT",
    desc: "CIT - INTERNATIONAL, SHYMKENT,Kazakhstan",
},{
    value: "CIX - J A QUINONES GONZALEZ, CHICLAYO,Peru",
    citycode: "CIX",
    desc: "CIX - J A QUINONES GONZALEZ, CHICLAYO,Peru",
},{
    value: "CIW - CANOUAN, CANOUAN,Saint Vincent and the Grenadines",
    citycode: "CIW",
    desc: "CIW - CANOUAN, CANOUAN,Saint Vincent and the Grenadines",
},{
    value: "CIY - VINCENZO MAGLIOCCO, COMISO,Italy",
    citycode: "CIY",
    desc: "CIY - VINCENZO MAGLIOCCO, COMISO,Italy",
},{
    value: "CIZ - COARI, COARI,Brazil",
    citycode: "CIZ",
    desc: "CIZ - COARI, COARI,Brazil",
},{
    value: "CJA - ARMANDO R IGLESIAS, CAJAMARCA,Peru",
    citycode: "CJA",
    desc: "CJA - ARMANDO R IGLESIAS, CAJAMARCA,Peru",
},{
    value: "CJB - INTERNATIONAL, COIMBATORE,India",
    citycode: "CJB",
    desc: "CJB - INTERNATIONAL, COIMBATORE,India",
},{
    value: "CJC - EL LOA, CALAMA,Chile",
    citycode: "CJC",
    desc: "CJC - EL LOA, CALAMA,Chile",
},{
    value: "CJD - CANDILEJAS, CANDILEJAS,Colombia",
    citycode: "CJD",
    desc: "CJD - CANDILEJAS, CANDILEJAS,Colombia",
},{
    value: "CJF - COONDEWANNA, COONDEWANNA,Australia",
    citycode: "CJF",
    desc: "CJF - COONDEWANNA, COONDEWANNA,Australia",
},{
    value: "CJH - TSYLOS PARK LODGE, CHILKO LAKE,Canada",
    citycode: "CJH",
    desc: "CJH - TSYLOS PARK LODGE, CHILKO LAKE,Canada",
},{
    value: "CJL - CHITRAL, CHITRAL,Pakistan",
    citycode: "CJL",
    desc: "CJL - CHITRAL, CHITRAL,Pakistan",
},{
    value: "CJM - CHUMPHON AIRPORT, CHUMPHON,Thailand",
    citycode: "CJM",
    desc: "CJM - CHUMPHON AIRPORT, CHUMPHON,Thailand",
},{
    value: "CJN - EL CAJON, EL CAJON,United States",
    citycode: "CJN",
    desc: "CJN - EL CAJON, EL CAJON,United States",
},{
    value: "CJS - ABRAHAM GONZALEZ INTL, CIUDAD JUAREZ,Mexico",
    citycode: "CJS",
    desc: "CJS - ABRAHAM GONZALEZ INTL, CIUDAD JUAREZ,Mexico",
},{
    value: "CJT - COPALAR, COMITAN,Mexico",
    citycode: "CJT",
    desc: "CJT - COPALAR, COMITAN,Mexico",
},{
    value: "CKA - KEGELMAN AF AUX FIELD, CHEROKEE,United States",
    citycode: "CKA",
    desc: "CKA - KEGELMAN AF AUX FIELD, CHEROKEE,United States",
},{
    value: "CKB - BENEDUM, CLARKSBURG,United States",
    citycode: "CKB",
    desc: "CKB - BENEDUM, CLARKSBURG,United States",
},{
    value: "CKC - INTERNATIONAL, CHERKASY,Ukraine",
    citycode: "CKC",
    desc: "CKC - INTERNATIONAL, CHERKASY,Ukraine",
},{
    value: "CKD - CROOKED CREEK, CROOKED CREEK,United States",
    citycode: "CKD",
    desc: "CKD - CROOKED CREEK, CROOKED CREEK,United States",
},{
    value: "CKE - LAMPSON FIELD, LAKEPORT,United States",
    citycode: "CKE",
    desc: "CKE - LAMPSON FIELD, LAKEPORT,United States",
},{
    value: "CKG - JIANGBEI INTL, CHONGQING,China",
    citycode: "CKG",
    desc: "CKG - JIANGBEI INTL, CHONGQING,China",
},{
    value: "CKH - CHOKURDAH, CHOKURDAH,Russia",
    citycode: "CKH",
    desc: "CKH - CHOKURDAH, CHOKURDAH,Russia",
},{
    value: "CKI - CROKER ISLAND, CROKER ISLAND,Australia",
    citycode: "CKI",
    desc: "CKI - CROKER ISLAND, CROKER ISLAND,Australia",
},{
    value: "CKK - CHEROKEE, CHEROKEE,United States",
    citycode: "CKK",
    desc: "CKK - CHEROKEE, CHEROKEE,United States",
},{
    value: "CKL - CHKALOVSKIY AIRPORT, CHKALOVSKIY,Russia",
    citycode: "CKL",
    desc: "CKL - CHKALOVSKIY AIRPORT, CHKALOVSKIY,Russia",
},{
    value: "CKM - FLETCHER FLD, CLARKSDALE,United States",
    citycode: "CKM",
    desc: "CKM - FLETCHER FLD, CLARKSDALE,United States",
},{
    value: "CKN - CROOKSTON MNPL, CROOKSTON,United States",
    citycode: "CKN",
    desc: "CKN - CROOKSTON MNPL, CROOKSTON,United States",
},{
    value: "CKO - FRANCISCO LACERDA JR, CORNELIO PROCOPIO,Brazil",
    citycode: "CKO",
    desc: "CKO - FRANCISCO LACERDA JR, CORNELIO PROCOPIO,Brazil",
},{
    value: "CKR - CRANE ISLAND, CRANE ISLAND,United States",
    citycode: "CKR",
    desc: "CKR - CRANE ISLAND, CRANE ISLAND,United States",
},{
    value: "CKS - CARAJAS, PARAUAPEBAS,Brazil",
    citycode: "CKS",
    desc: "CKS - CARAJAS, PARAUAPEBAS,Brazil",
},{
    value: "CKT - SARAKHS, SARAKHS,Iran",
    citycode: "CKT",

    desc:"CKT - SARAKHS, SARAKHS,Iran",
}];
//var a = jQuery.parseJSON(projects);
$.each(projects, function(i, obj) {


    //console.log(obj['value']+' &&& '+obj['citycode']+' &&& '+obj['desc']); 
 
var value = obj['value'];
var citycode = obj['citycode'];
var desc = obj['desc'];

 $.ajax({   
             type: 'post',
             url: 'insertdata.php',
             data:"value=" + value +"&citycode="+citycode+"&desc="+desc,
            success:function (response)
            {
                // console.log(response);
               
            }
        });

});

</script>
