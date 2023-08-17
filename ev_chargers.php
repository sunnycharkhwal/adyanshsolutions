<?php include 'header.php';
$data1 = [
    ['parameter' => 'Input', 'result' => '1-PHASE 3.3kW 230 V 20 Amp'],
    ['parameter' => 'Output', 'result' => '3.3 KW 16 AMP (230V)'],
    ['parameter' => 'Wires', 'result' => '3 wires (L, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 62196-2 Type 2'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-20 degree to 55 degrees'],
    ['parameter' => '# outputs', 'result' => 'ONE'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'Not Applicable'],
    ['parameter' => 'Updates', 'result' => 'No Updates'],
    ['parameter' => 'Charging Interface', 'result' => 'Type 2 Gun'],
    ['parameter' => 'Display', 'result' => 'LED Indicator - No Display'],
    ['parameter' => 'Connectivity', 'result' => 'Wired'],
    ['parameter' => 'IP Rating', 'result' => 'IP54 ingress protection'],
    ['parameter' => 'Mounting', 'result' => 'Wall Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Natural Cooling'],
    ['parameter' => 'Push Button', 'result' => 'On/ Off Switch '],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'As per Standards '],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '130 X 110 X 160 mm (Box)'],
    ['parameter' => 'Weight', 'result' => '3.5 Kg'],
    ['parameter' => 'Cable Length', 'result' => '3 Mtr / 5 Mtr (Optional)'],
];
$data1a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '6 Months'],
    ['parameter' => 'Product Certificate', 'result' => 'No Certification'],
];
$data2 = [
    ['parameter' => 'Input', 'result' => '1-Phase 7.4 KW (220 V - 240 V) 32 Amp'],
    ['parameter' => 'Output', 'result' => '3.3 KW 32 Amp (220 - 240V)'],
    ['parameter' => 'Wires', 'result' => '3 wires (L, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 62196 Type 2'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-20 degree to 55 degrees'],
    ['parameter' => '# outputs', 'result' => 'ONE'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'Not applicable'],
    ['parameter' => 'Updates', 'result' => 'No Updates'],
    ['parameter' => 'Charging Interface', 'result' => 'Type 2 Gun'],
    ['parameter' => 'Display', 'result' => 'LED Indicator - No Display'],
    ['parameter' => 'Connectivity', 'result' => 'Wired'],
    ['parameter' => 'IP Rating', 'result' => 'IP54 ingress protection'],
    ['parameter' => 'Mounting', 'result' => 'Wall Mounting / Pole Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Natural Cooling'],
    ['parameter' => 'Push Button', 'result' => 'On-Off Switch'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'As per Standards '],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '130 X 110 X 160 mm (Box)'],
    ['parameter' => 'Weight', 'result' => '3.5 Kg'],
    ['parameter' => 'Cable Length', 'result' => '3 Mtr / 5 Mtr (Optional)'],
];
$data2a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '6 Months'],
    ['parameter' => 'Product Certificate', 'result' => 'No Certification'],
];
$data3 = [
    ['parameter' => 'Input', 'result' => '22 KW 3-Phase 440 V'],
    ['parameter' => 'Output', 'result' => '22 KW 10-32 Amp adjustable (415 V)'],
    ['parameter' => 'Wires', 'result' => '5 Wires (L1, L2, L3, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 14443A'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-30 degree to 60 degrees'],
    ['parameter' => '# outputs', 'result' => 'ONE'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wireless)'],
    ['parameter' => 'Updates', 'result' => 'Through remote connection'],
    ['parameter' => 'Charging Interface', 'result' => 'Input Plug type-2 pin female connector'],
    ['parameter' => 'Display', 'result' => 'NONE - LED Indicator'],
    ['parameter' => 'Connectivity', 'result' => 'Wired'],
    ['parameter' => 'IP Rating', 'result' => 'IP55 ingress protection / IK 10'],
    ['parameter' => 'Mounting', 'result' => 'Wall / Pole Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Natural Cooling'],
    ['parameter' => 'Push Button', 'result' => 'Emergency Stop'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'CAN based communication AIS 138'],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '233 X 150 * 70 mm'],
    ['parameter' => 'Weight', 'result' => '3 KG'],
    ['parameter' => 'Cable Length', 'result' => '5 Mtr'],
];
$data3a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '1 Year'],
    ['parameter' => 'Product Certificate', 'result' => 'EN IEC61851-1:2019,IEC 61851-1:2017,IEC 62955:2018'],
];
$data4 = [
    ['parameter' => 'Input', 'result' => '1-PHASE 230 V'],
    ['parameter' => 'Output', 'result' => '3.3 KW 16 AMP (230V)'],
    ['parameter' => 'Wires', 'result' => '3 wires (L, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 60309'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-20 degree to 55 degrees'],
    ['parameter' => '# outputs', 'result' => 'ONE'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wireless)'],
    ['parameter' => 'Updates', 'result' => 'Through remote connection'],
    ['parameter' => 'Charging Interface', 'result' => 'Input Plug type-3 pin female connector'],
    ['parameter' => 'Display', 'result' => 'User friendly 4.3" TFT LCD display for customer interface'],
    ['parameter' => 'Connectivity', 'result' => 'Wired'],
    ['parameter' => 'IP Rating', 'result' => 'IP54 ingress protection / IK 10'],
    ['parameter' => 'Mounting', 'result' => 'Wall Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Natural Cooling'],
    ['parameter' => 'Push Button', 'result' => 'Emergency Stop'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'CP Based communication'],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '400 X 120 * 280 mm'],
    ['parameter' => 'Weight', 'result' => '8 Kg'],
    ['parameter' => 'Cable Length', 'result' => 'NA'],
];
$data4a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '1 Year'],
    ['parameter' => 'Product Certificate', 'result' => 'CE Certificate, ISO 9001 2015, ISO 14001 2015.'],
];
$data5 = [
    ['parameter' => 'Input', 'result' => '1-Phase 7.4 KW (220 V - 240 V)'],
    ['parameter' => 'Output', 'result' => '7.4 Kw 32 Amp (220 - 240V)'],
    ['parameter' => 'Wires', 'result' => '3 wires (L, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 62196 Type 2'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-20 degree to 55 degrees'],
    ['parameter' => '# outputs', 'result' => 'ONE'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wireless)'],
    ['parameter' => 'Updates', 'result' => 'Through remote connection'],
    ['parameter' => 'Charging Interface', 'result' => 'Input Plug type-2 pin female connector'],
    ['parameter' => 'Display', 'result' => 'User friendly 2.3" TFT LCD display for customer interface'],
    ['parameter' => 'Connectivity', 'result' => 'Wired'],
    ['parameter' => 'IP Rating', 'result' => 'IP55 ingress protection / IK 10'],
    ['parameter' => 'Mounting', 'result' => 'Wall Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Natural Cooling'],
    ['parameter' => 'Push Button', 'result' => 'Emergency Stop'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'CP Based communication'],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '400 X 120 * 280 mm'],
    ['parameter' => 'Weight', 'result' => '8 Kg'],
    ['parameter' => 'Cable Length', 'result' => '5 Meters'],
];
$data5a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '1 Year'],
    ['parameter' => 'Product Certificate', 'result' => 'CE Certificate, ISO 9001 2015, ISO 14001 2015.'],
];
$data6 = [
    ['parameter' => 'Input', 'result' => '1-Phase 7.4 KW (220 V - 240 V)'],
    ['parameter' => 'Output', 'result' => '7.4 Kw 32 Amp (220 - 240V)'],
    ['parameter' => 'Wires', 'result' => '3 wires (L, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 62196 Type 2'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-20 degree to 55 degrees'],
    ['parameter' => '# outputs', 'result' => 'ONE'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wireless)'],
    ['parameter' => 'Updates', 'result' => 'Through remote connection'],
    ['parameter' => 'Charging Interface', 'result' => 'Input Plug type-2 pin female connector'],
    ['parameter' => 'Display', 'result' => 'User friendly 2.3" TFT LCD display for customer interface'],
    ['parameter' => 'Connectivity', 'result' => 'Wired'],
    ['parameter' => 'IP Rating', 'result' => 'IP55 ingress protection / IK 10'],
    ['parameter' => 'Mounting', 'result' => 'Wall Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Natural Cooling'],
    ['parameter' => 'Push Button', 'result' => 'Emergency Stop'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'CP Based communication'],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '400 X 120 * 280 mm'],
    ['parameter' => 'Weight', 'result' => '8 Kg'],
    ['parameter' => 'Cable Length', 'result' => '5 Meters'],
];
$data6a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '1 Year'],
    ['parameter' => 'Product Certificate', 'result' => 'No Certification'],
];
$data7 = [
    ['parameter' => 'Input', 'result' => '1-PHASE 380 -440 V'],
    ['parameter' => 'Output', 'result' => '3.3 KW 16 AMP (230V) for each output'],
    ['parameter' => 'Wires', 'result' => '5 Wires (L1, L2, L3, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 60309'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-20 degree to 55 degrees'],
    ['parameter' => '# outputs', 'result' => 'THREE'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wireless)'],
    ['parameter' => 'Updates', 'result' => 'Through remote connection'],
    ['parameter' => 'Charging Interface', 'result' => 'Input Plug type-3 pin female connector'],
    ['parameter' => 'Display', 'result' => 'User friendly 4.3" TFT LCD display for customer interface'],
    ['parameter' => 'Connectivity', 'result' => 'Wired'],
    ['parameter' => 'IP Rating', 'result' => 'IP54 ingress protection / IK 10'],
    ['parameter' => 'Mounting', 'result' => 'Wall Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Natural Cooling'],
    ['parameter' => 'Push Button', 'result' => 'Emergency Stop'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'CP Based communication'],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '400 X 120 * 280 mm'],
    ['parameter' => 'Weight', 'result' => '8 Kg'],
    ['parameter' => 'Cable Length', 'result' => 'NA'],
];
$data7a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '1 Year'],
    ['parameter' => 'Product Certificate', 'result' => 'CE Certificate, ISO 9001 2015, ISO 14001 2015.'],
];
$data8 = [
    ['parameter' => 'Input', 'result' => '11 KW 3-Phase 440 V'],
    ['parameter' => 'Output', 'result' => '11 KW 16 Amp (440 V)'],
    ['parameter' => 'Wires', 'result' => '5 Wires (L1, L2, L3, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 62196 Type 2'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-20 degree to 55 degrees'],
    ['parameter' => '# outputs', 'result' => 'ONE'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wireless)'],
    ['parameter' => 'Updates', 'result' => 'Through remote connection'],
    ['parameter' => 'Charging Interface', 'result' => 'Input Plug type-2 pin female connector'],
    ['parameter' => 'Display', 'result' => 'User friendly 4.3" TFT LCD display for customer interface'],
    ['parameter' => 'Connectivity', 'result' => 'Wired'],
    ['parameter' => 'IP Rating', 'result' => 'IP55 ingress protection / IK 10'],
    ['parameter' => 'Mounting', 'result' => 'Wall Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Natural Cooling'],
    ['parameter' => 'Push Button', 'result' => 'Emergency Stop'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'CP Based communication'],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '400 X 120 * 280 mm'],
    ['parameter' => 'Weight', 'result' => '8 Kg'],
    ['parameter' => 'Cable Length', 'result' => '5 Mtr'],
];
$data8a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '1 Year'],
    ['parameter' => 'Product Certificate', 'result' => 'CE Certificate, ISO 9001 2015, ISO 14001 2015.'],
];
$data9 = [
    ['parameter' => 'Input', 'result' => '11 KW 3-Phase 440 V'],
    ['parameter' => 'Output', 'result' => '11 KW 16 Amp (440 V)'],
    ['parameter' => 'Wires', 'result' => '5 Wires (L1, L2, L3, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 62196 Type 2'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-20 degree to 55 degrees'],
    ['parameter' => '# outputs', 'result' => 'ONE'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wireless)'],
    ['parameter' => 'Updates', 'result' => 'Through remote connection'],
    ['parameter' => 'Charging Interface', 'result' => 'Input Plug type-2 pin female connector'],
    ['parameter' => 'Display', 'result' => 'User friendly 4.3" TFT LCD display for customer interface'],
    ['parameter' => 'Connectivity', 'result' => 'Wired'],
    ['parameter' => 'IP Rating', 'result' => 'IP55 ingress protection / IK 10'],
    ['parameter' => 'Mounting', 'result' => 'Wall Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Natural Cooling'],
    ['parameter' => 'Push Button', 'result' => 'Emergency Stop'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'CP Based communication'],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '400 X 120 * 280 mm'],
    ['parameter' => 'Weight', 'result' => '8 Kg'],
    ['parameter' => 'Cable Length', 'result' => '5 Mtr'],
];
$data9a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '1 Year'],
    ['parameter' => 'Product Certificate', 'result' => 'CE Certificate, ISO 9001 2015, ISO 14001 2015.'],
];
$data10 = [
    ['parameter' => 'Input', 'result' => '3-PHASE 415 V'],
    ['parameter' => 'Output', 'result' => '7.4 KW 32 AMP (230V) respectively for each output'],
    ['parameter' => 'Wires', 'result' => '5 Wires (L1, L2, L3, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 62196 Type-2'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-20 degree to 55 degrees'],
    ['parameter' => '# outputs', 'result' => 'TWO'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wifi)'],
    ['parameter' => 'Updates', 'result' => 'Automatic'],
    ['parameter' => 'Charging Interface', 'result' => 'Type 2 Gun'],
    ['parameter' => 'Display', 'result' => 'LCD Display'],
    ['parameter' => 'Connectivity', 'result' => 'Wired'],
    ['parameter' => 'IP Rating', 'result' => 'IP54 ingress protection'],
    ['parameter' => 'Mounting', 'result' => 'Wall Mounting / Pole Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Natural Cooling'],
    ['parameter' => 'Push Button', 'result' => 'Emergency Stop, On-Off Switch'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'As per Standards '],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '340 X 260 X 180 mm (Box)'],
    ['parameter' => 'Weight', 'result' => '12 Kg'],
    ['parameter' => 'Cable Length', 'result' => '3 Mtr / 5 Mtr (Optional)'],
];
$data10a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '12 Months'],
    ['parameter' => 'Product Certificate', 'result' => 'CE Certificate, ISO 9001 2015, ISO 14001 2015.'],
];
$data11 = [
    ['parameter' => 'Input', 'result' => '3-PHASE 415 V'],
    ['parameter' => 'Output', 'result' => '7.4 KW 32 Amp, 3.3 Kw 16 Amp & 3.3 Kw 16 Amp (230V) respectively for each output'],
    ['parameter' => 'Wires', 'result' => '5 Wires (L1, L2, L3, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC  62196 Type-2 & 3 pin socket  OR IEC 60309'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-20 degree to 55 degrees'],
    ['parameter' => '# outputs', 'result' => 'THREE'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wifi)'],
    ['parameter' => 'Updates', 'result' => 'Automatic'],
    ['parameter' => 'Charging Interface', 'result' => 'Type 2 Gun'],
    ['parameter' => 'Display', 'result' => 'LCD Display'],
    ['parameter' => 'Connectivity', 'result' => 'Wired'],
    ['parameter' => 'IP Rating', 'result' => 'IP54 ingress protection'],
    ['parameter' => 'Mounting', 'result' => 'Wall Mounting / Pole Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Natural Cooling'],
    ['parameter' => 'Push Button', 'result' => 'Emergency Stop, On-Off Switch'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'As per Standards '],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '340 X 260 X 180 mm (Box)'],
    ['parameter' => 'Weight', 'result' => '10 Kg'],
    ['parameter' => 'Cable Length', 'result' => '3 Mtr / 5 Mtr (Optional)'],
];
$data11a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '12 Months'],
    ['parameter' => 'Product Certificate', 'result' => 'CE Certificate, ISO 9001 2015, ISO 14001 2015.'],
];
$data12 = [
    ['parameter' => 'Input', 'result' => '14 KW 3-Phase (380 - 440 V)'],
    ['parameter' => 'Output', 'result' => '14 KW 32 Amp (440 V)'],
    ['parameter' => 'Wires', 'result' => '5 Wires (L1, L2, L3, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 62196 Type 2'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-20 degree to 55 degrees'],
    ['parameter' => '# outputs', 'result' => 'TWO'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wireless)'],
    ['parameter' => 'Updates', 'result' => 'Through remote connection'],
    ['parameter' => 'Charging Interface', 'result' => 'Input Plug type-2 pin female connector'],
    ['parameter' => 'Display', 'result' => 'User friendly 4.3" TFT LCD display for customer interface'],
    ['parameter' => 'Connectivity', 'result' => 'Wired'],
    ['parameter' => 'IP Rating', 'result' => 'IP54 ingress protection / IK 10'],
    ['parameter' => 'Mounting', 'result' => 'Floor Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Natural Cooling'],
    ['parameter' => 'Push Button', 'result' => 'Emergency Stop'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'CAN based communication AIS 138'],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '500 X 340 X 1600 mm'],
    ['parameter' => 'Weight', 'result' => '60 Kg'],
    ['parameter' => 'Cable Length', 'result' => '5 Mtr'],
];
$data12a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '1 Year'],
    ['parameter' => 'Product Certificate', 'result' => 'CE Certificate, ISO 9001 2015, ISO 14001 2015.'],
];
$data13 = [
    ['parameter' => 'Input', 'result' => '3-Phase 5-wire AC system (380 - 440 V)'],
    ['parameter' => 'Output', 'result' => '20 KW 80 Amp (200-1000 V DC)'],
    ['parameter' => 'Wires', 'result' => '5 Wires (L1, L2, L3, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 62196, 61851, SAE J 1772, CHAdeMO'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-25 degree to 55 degrees'],
    ['parameter' => '# outputs', 'result' => 'ONE'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wireless)'],
    ['parameter' => 'Updates', 'result' => 'Through remote connection upto 2.0 J'],
    ['parameter' => 'Charging Interface', 'result' => 'CCS-2 female connector'],
    ['parameter' => 'Display', 'result' => '7 " touch screen with shell'],
    ['parameter' => 'Connectivity', 'result' => 'Wired/4G'],
    ['parameter' => 'IP Rating', 'result' => 'IP55 ingress protection / IK 10'],
    ['parameter' => 'Mounting', 'result' => 'Wall Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Air Forced Cooled'],
    ['parameter' => 'Push Button', 'result' => 'yes'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'CAN based communication AIS 138'],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '450*760*235'],
    ['parameter' => 'Weight', 'result' => '65kg'],
    ['parameter' => 'Cable Length', 'result' => '5 Mtr'],
];
$data13a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '1 Year'],
    ['parameter' => 'Product Certificate', 'result' => 'CE Certificate, ISO 9001 2015, ISO 14001 2015.'],
];
$data14 = [
    ['parameter' => 'Input', 'result' => '22 KW 3-Phase 440 V'],
    ['parameter' => 'Output', 'result' => '22 KW 32 Amp (415 V)'],
    ['parameter' => 'Wires', 'result' => '5 Wires (L1, L2, L3, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 62196 Type 2'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-20 degree to 55 degrees'],
    ['parameter' => '# outputs', 'result' => 'ONE'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wireless)'],
    ['parameter' => 'Updates', 'result' => 'Through remote connection'],
    ['parameter' => 'Charging Interface', 'result' => 'Input Plug type-2 pin female connector'],
    ['parameter' => 'Display', 'result' => '4.3" TFT LCD display for customer interface'],
    ['parameter' => 'Connectivity', 'result' => 'Wired'],
    ['parameter' => 'IP Rating', 'result' => 'IP54 ingress protection / IK 10'],
    ['parameter' => 'Mounting', 'result' => 'Wall Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Natural Cooling'],
    ['parameter' => 'Push Button', 'result' => 'Emergency Stop'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'CAN based communication AIS 138'],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '400 X 120 * 280 mm'],
    ['parameter' => 'Weight', 'result' => '8 Kg'],
    ['parameter' => 'Cable Length', 'result' => '5 Mtr'],
];
$data14a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '1 Year'],
    ['parameter' => 'Product Certificate', 'result' => 'CE Certificate, ISO 9001 2015, ISO 14001 2015.'],
];
$data15 = [
    ['parameter' => 'Input', 'result' => '44 KW 3-Phase (380 - 440 V)'],
    ['parameter' => 'Output', 'result' => '44 KW 32 Amp (440 V)'],
    ['parameter' => 'Wires', 'result' => '5 Wires (L1, L2, L3, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 62196 Type 2'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-20 degree to 55 degrees'],
    ['parameter' => '# outputs', 'result' => 'TWO'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wireless)'],
    ['parameter' => 'Updates', 'result' => 'Through remote connection'],
    ['parameter' => 'Charging Interface', 'result' => 'Input Plug type-2 pin female connector'],
    ['parameter' => 'Display', 'result' => 'User friendly 4.3" TFT LCD display for customer interface'],
    ['parameter' => 'Connectivity', 'result' => 'Wired'],
    ['parameter' => 'IP Rating', 'result' => 'IP54 ingress protection / IK 10'],
    ['parameter' => 'Mounting', 'result' => 'Floor Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Natural Cooling'],
    ['parameter' => 'Push Button', 'result' => 'Emergency Stop'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'CAN based communication AIS 138'],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '500 X 340 X 1600 mm'],
    ['parameter' => 'Weight', 'result' => '60 Kg'],
    ['parameter' => 'Cable Length', 'result' => '5 Mtr'],
];
$data15a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '1 Year'],
    ['parameter' => 'Product Certificate', 'result' => 'CE Certificate, ISO 9001 2015, ISO 14001 2015.'],
];
$data16 = [
    ['parameter' => 'Input', 'result' => '3-Phase 5-wire AC system (380 - 440 V)'],
    ['parameter' => 'Output', 'result' => '30 KW 125 Amp (200-1000 V DC)'],
    ['parameter' => 'Wires', 'result' => '5 Wires (L1, L2, L3, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 62196, 61851, SAE J 1772, CHAdeMO'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-25 degree to 55 degrees'],
    ['parameter' => '# outputs', 'result' => 'ONE'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wireless)'],
    ['parameter' => 'Updates', 'result' => 'Through remote connection upto 2.0 J'],
    ['parameter' => 'Charging Interface', 'result' => 'CCS-2 female connector'],
    ['parameter' => 'Display', 'result' => '7 " touch screen with shell'],
    ['parameter' => 'Connectivity', 'result' => 'Wired/4G'],
    ['parameter' => 'IP Rating', 'result' => 'IP55 ingress protection / IK 10'],
    ['parameter' => 'Mounting', 'result' => 'Wall Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Air Forced Cooled'],
    ['parameter' => 'Push Button', 'result' => 'yes'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'CAN based communication AIS 138'],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '450*760*236'],
    ['parameter' => 'Weight', 'result' => '70kg'],
    ['parameter' => 'Cable Length', 'result' => '5 Mtr'],
];
$data16a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '1 Year'],
    ['parameter' => 'Product Certificate', 'result' => 'CE Certificate, ISO 9001 2015, ISO 14001 2015.'],
];
$data17 = [
    ['parameter' => 'Input', 'result' => '3-Phase 5-wire AC system (380 - 440 V)'],
    ['parameter' => 'Output', 'result' => '30 KW 125 Amp (200-1000 V DC)'],
    ['parameter' => 'Wires', 'result' => '5 Wires (L1, L2, L3, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 62196, 61851, SAE J 1772, CHAdeMO'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-25 degree to 55 degrees'],
    ['parameter' => '# outputs', 'result' => 'ONE'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wireless)'],
    ['parameter' => 'Updates', 'result' => 'Through remote connection upto 2.0 J'],
    ['parameter' => 'Charging Interface', 'result' => 'CCS-2 female connector'],
    ['parameter' => 'Display', 'result' => '7 " touch screen with shell'],
    ['parameter' => 'Connectivity', 'result' => 'Wired/4G'],
    ['parameter' => 'IP Rating', 'result' => 'IP55 ingress protection / IK 10'],
    ['parameter' => 'Mounting', 'result' => 'Floor Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Air Forced Cooled'],
    ['parameter' => 'Push Button', 'result' => 'yes'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'PLC Based Communication'],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '750*1600*555'],
    ['parameter' => 'Weight', 'result' => '300kg'],
    ['parameter' => 'Cable Length', 'result' => '5 Mtr'],
];
$data17a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '1 Year'],
    ['parameter' => 'Product Certificate', 'result' => 'CE Certificate, ISO 9001 2015, ISO 14001 2015.'],
];
$data18 = [
    ['parameter' => 'Input', 'result' => '3-Phase 5-wire AC system (380 - 440 V)'],
    ['parameter' => 'Output', 'result' => '40 KW 133 Amp (150-1000 V DC)'],
    ['parameter' => 'Wires', 'result' => '5 Wires (L1, L2, L3, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 62196, 61851, SAE J 1772, CHAdeMO'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-25 degree to 75 degrees'],
    ['parameter' => '# outputs', 'result' => 'TWO'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wireless)'],
    ['parameter' => 'Updates', 'result' => 'Through remote connection upto 2.0 J'],
    ['parameter' => 'Charging Interface', 'result' => 'CCS-2 female connector'],
    ['parameter' => 'Display', 'result' => '7 " touch screen with shell'],
    ['parameter' => 'Connectivity', 'result' => 'Wired/4G'],
    ['parameter' => 'IP Rating', 'result' => 'IP55 ingress protection / IK 10'],
    ['parameter' => 'Mounting', 'result' => 'Floor Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Air Forced Cooled'],
    ['parameter' => 'Push Button', 'result' => 'yes'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'PLC Based Communication'],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '750*1600*555'],
    ['parameter' => 'Weight', 'result' => '300kg'],
    ['parameter' => 'Cable Length', 'result' => '5 Mtr'],
];
$data18a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '1 Year'],
    ['parameter' => 'Product Certificate', 'result' => 'CE Certificate, ISO 9001 2015, ISO 14001 2015.'],
];
$data19 = [
    ['parameter' => 'Input', 'result' => '3-Phase 5-wire AC system (380 - 440 V)'],
    ['parameter' => 'Output', 'result' => '60 KW 200 Amp (150-1000 V DC)'],
    ['parameter' => 'Wires', 'result' => '5 Wires (L1, L2, L3, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 62196, 61851, SAE J 1772, CHAdeMO'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-25 degree to 75 degrees'],
    ['parameter' => '# outputs', 'result' => 'ONE'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wireless)'],
    ['parameter' => 'Updates', 'result' => 'Through remote connection upto 2.0 J'],
    ['parameter' => 'Charging Interface', 'result' => 'CCS-2 female connector'],
    ['parameter' => 'Display', 'result' => '7 " touch screen with shell'],
    ['parameter' => 'Connectivity', 'result' => 'Wired/4G'],
    ['parameter' => 'IP Rating', 'result' => 'IP55 ingress protection / IK 10'],
    ['parameter' => 'Mounting', 'result' => 'Floor Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Air Forced Cooled'],
    ['parameter' => 'Push Button', 'result' => 'yes'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'PLC Based Communication'],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '750*1600*556'],
    ['parameter' => 'Weight', 'result' => '300kg'],
    ['parameter' => 'Cable Length', 'result' => '5 Mtr'],
];
$data19a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '1 Year'],
    ['parameter' => 'Product Certificate', 'result' => 'CE Certificate, ISO 9001 2015, ISO 14001 2015.'],
];
$data20 = [
    ['parameter' => 'Input', 'result' => '3-Phase 5-wire AC system (380 - 440 V)'],
    ['parameter' => 'Output', 'result' => '60 KW 200 Amp (150-1000 V DC)'],
    ['parameter' => 'Wires', 'result' => '5 Wires (L1, L2, L3, N, PE)'],
    ['parameter' => 'Output Connectors', 'result' => 'IEC 62196, 61851, SAE J 1772, CHAdeMO'],
    ['parameter' => 'Ambient Temperatire', 'result' => '-25 degree to 75 degrees'],
    ['parameter' => '# outputs', 'result' => 'TWO'],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => 'OCCP v.1.6 or above (ethernet / GSM / Wireless)'],
    ['parameter' => 'Updates', 'result' => 'Through remote connection upto 2.0 J'],
    ['parameter' => 'Charging Interface', 'result' => 'CCS-2 female connector'],
    ['parameter' => 'Display', 'result' => '7 " touch screen with shell'],
    ['parameter' => 'Connectivity', 'result' => 'Wired/4G'],
    ['parameter' => 'IP Rating', 'result' => 'IP55 ingress protection / IK 10'],
    ['parameter' => 'Mounting', 'result' => 'Floor Mounting'],
    ['parameter' => 'Cooling Method', 'result' => 'Air Forced Cooled'],
    ['parameter' => 'Push Button', 'result' => 'yes'],
    ['parameter' => 'Communication between charger & vehicle', 'result' => 'PLC Based Communication'],
    ['parameter' => 'user Authentication', 'result' => 'Mobile / QR Code / RFID / Password login'],
    ['parameter' => 'Dimension', 'result' => '750*1600*556'],
    ['parameter' => 'Weight', 'result' => '300kg'],
    ['parameter' => 'Cable Length', 'result' => '5 Mtr'],
];
$data20a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '1 Year'],
    ['parameter' => 'Product Certificate', 'result' => 'CE Certificate, ISO 9001 2015, ISO 14001 2015.'],
];
$data21 = [
    ['parameter' => 'Input', 'result' => ''],
    ['parameter' => 'Output', 'result' => ''],
    ['parameter' => 'Wires', 'result' => ''],
    ['parameter' => 'Output Connectors', 'result' => ''],
    ['parameter' => 'Ambient Temperatire', 'result' => ''],
    ['parameter' => '# outputs', 'result' => ''],
    ['parameter' => 'Firmware (between EVSE & CMS)', 'result' => ''],
    ['parameter' => 'Updates', 'result' => ''],
    ['parameter' => 'Charging Interface', 'result' => ''],
    ['parameter' => 'Display', 'result' => ''],
    ['parameter' => 'Connectivity', 'result' => ''],
    ['parameter' => 'IP Rating', 'result' => ''],
    ['parameter' => 'Mounting', 'result' => ''],
    ['parameter' => 'Cooling Method', 'result' => ''],
    ['parameter' => 'Push Button', 'result' => ''],
    ['parameter' => 'Communication between charger & vehicle', 'result' => ''],
    ['parameter' => 'user Authentication', 'result' => ''],
    ['parameter' => 'Dimension', 'result' => ''],
    ['parameter' => 'Weight', 'result' => ''],
    ['parameter' => 'Cable Length', 'result' => ''],
];
$data21a = [
    ['parameter' => 'Over Current', 'result' => 'YES'],
    ['parameter' => 'High Voltage', 'result' => 'YES'],
    ['parameter' => 'Residual Current', 'result' => 'YES'],
    ['parameter' => 'Surge Protection', 'result' => 'YES'],
    ['parameter' => 'Leakage Protection', 'result' => 'YES'],
    ['parameter' => 'Short Circuit', 'result' => 'YES'],
    ['parameter' => 'Over Temperature', 'result' => 'YES'],
    ['parameter' => 'Warranty', 'result' => '1 Year'],
    ['parameter' => 'Product Certificate', 'result' => 'No Certification'],
];
?>
<!-- all page top header -->
<div class="top_header_all_page mb-5">
    <div class="top_header_all_page_img" style="background-image: url('img/evt.jpeg');"></div>
    <div class="top_header_all_page_inner">
        <div class="top_header_text_div">
            <h3>EV Chargers</h3>
            <div class="top_header_text_div_inner">
                <a href="index.php">index</a>
                <span><i class="fas fa-angle-double-right"></i></span>
                <p>EV Chargers</p>
            </div>
        </div>
    </div>
</div>
<!-- all page top header -->
<section class=" mb-5 container">

</section>
<!-- list  -->
<section class=" mb-5 container">
    <div class="title_index_about title_index_about2">
        <p><i class="fas fa-circle"></i> CHARGER DETAIL</p>
        <h3>
            Please select your preferred charger
        </h3>
    </div>
    <div class="coltact_us_about index_about_text_div">
        <p>
            Please select your preferred charger from wide range offered by us

        </p>
    </div>
    <div class="accordion ev_table_list mt-4" id="accordionPanelsStayOpenExample">
        <!-- list 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo1">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo1" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo1">
                    3.3 KW Portable Type 2 (Guns # 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo1" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo1">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data1 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data1a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 1 end -->
        <!-- list 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    7.4 KW Portable Type 2 (Guns # 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data2 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data2a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 2 end -->
        <!-- list 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading3">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapse3">
                    22 KW Portable Type 2 (Guns # 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading3">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data3 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data3a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 3 end -->
        <!-- list 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading3">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapse4">
                    3.3 KW AC Type 2 (Guns # 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading4">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data4 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data4a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 4 end -->
        <!-- list 5 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading5">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false" aria-controls="panelsStayOpen-collapse5">
                    7.4 KW AC Type 2 (Guns # 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading5">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data5 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data5a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 5 end -->
        <!-- list 6 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading6">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false" aria-controls="panelsStayOpen-collapse6">
                    7.4 KW AC Type 2 with LCD (Guns # 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading6">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data6 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data6a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 6 end -->
        <!-- list 7 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading7">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse7" aria-expanded="false" aria-controls="panelsStayOpen-collapse7">
                    10 KW AC Type 2 (Guns # 3)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse7" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading7">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data7 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data7a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 7 end -->
        <!-- list 8 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading8">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse8" aria-expanded="false" aria-controls="panelsStayOpen-collapse8">
                    11 KW AC Type 2 (Guns # 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse8" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading8">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data8 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data8a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 8 end -->
        <!-- list 9 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading9">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse9" aria-expanded="false" aria-controls="panelsStayOpen-collapse9">
                    11 KW AC Type 2 (Guns # 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse9" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading9">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data9 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data9a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 9 end -->
        <!-- list 10 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading10">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse10" aria-expanded="false" aria-controls="panelsStayOpen-collapse10">
                    15 KW AC Type 2 - 2G (Guns # 2)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse10" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading10">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data10 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data10a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 10 end -->
        <!-- list 11 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading11">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse11" aria-expanded="false" aria-controls="panelsStayOpen-collapse11">
                    15 KW AC Type 2 - 3G (Guns # 3)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse11" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading11">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data11 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data11a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 11 end -->
        <!-- list 12 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading12">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse12" aria-expanded="false" aria-controls="panelsStayOpen-collapse12">
                    15 KW DC CCS 2 (Guns # 2)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse12" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading12">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data12 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data12a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 12 end -->
        <!-- list 13 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading13">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse13" aria-expanded="false" aria-controls="panelsStayOpen-collapse13">
                    20 KW DC CCS2 (Guns # 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse13" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading13">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data13 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data13a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 13 end -->
        <!-- list 14 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading14">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse14" aria-expanded="false" aria-controls="panelsStayOpen-collapse14">
                    22 KW AC Type 2 (Guns # 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse14" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading14">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data14 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data14a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 14 end -->
        <!-- list 15 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading15">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse15" aria-expanded="false" aria-controls="panelsStayOpen-collapse15">
                    43 KW AC Type 2 (Guns # 2)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse15" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading15">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data15 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data15a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 15 end -->
        <!-- list 16 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading16">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse16" aria-expanded="false" aria-controls="panelsStayOpen-collapse16">
                    30 KW DC CCS2 (Guns # 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse16" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading16">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data16 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data16a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 16 end -->
        <!-- list 17 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading17">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse17" aria-expanded="false" aria-controls="panelsStayOpen-collapse17">
                    40 KW DC CCS2 (Guns # 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse17" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading17">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data17 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data17a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 17 end -->
        <!-- list 18 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading18">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse18" aria-expanded="false" aria-controls="panelsStayOpen-collapse18">
                    40 KW DC CCS2 - 2G (Guns # 2)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse18" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading18">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data18 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data18a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 18 end -->
        <!-- list 19 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading19">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse19" aria-expanded="false" aria-controls="panelsStayOpen-collapse19">
                    60 KW DC CCS2 (Guns # 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse19" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading19">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data19 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data19a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 19 end -->
        <!-- list 20 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-heading20">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse20" aria-expanded="false" aria-controls="panelsStayOpen-collapse20">
                    60 KW DC CCS2 - 2G (Guns # 1)
                </button>
            </h2>
            <div id="panelsStayOpen-collapse20" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading20">
                <div class="accordion-body">
                    <div>
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Parameters</th>
                                    <th scope="col">Results</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data20 as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                <tr class="ev_inner_row">
                                    <td colspan="2">Safety parameter</td>
                                </tr>
                                <?php foreach ($data20a as $row) : ?>
                                    <tr>
                                        <td><?= $row['parameter'] ?></td>
                                        <td><?= $row['result'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- list 20 end -->
    </div>
</section>
<!-- list end -->

<?php include 'footer.php'; ?>