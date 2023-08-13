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
$data11a = [
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
    <div class="accordion ev_table_list mt-4" id="accordionExample">
        <!-- list 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo1">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                    3.3 KW Portable Type 2 (Guns # 1)
                </button>
            </h2>
            <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo1" data-bs-parent="#accordionExample">
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
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    7.4 KW Portable Type 2 (Guns # 1)
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
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
            <h2 class="accordion-header" id="heading3">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    22 KW Portable Type 2 (Guns # 1)
                </button>
            </h2>
            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
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
            <h2 class="accordion-header" id="heading3">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    3.3 KW AC Type 2 (Guns # 1)
                </button>
            </h2>
            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
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
            <h2 class="accordion-header" id="heading5">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    7.4 KW AC Type 2 (Guns # 1)
                </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
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
            <h2 class="accordion-header" id="heading6">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                    7.4 KW AC Type 2 with LCD (Guns # 1)
                </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
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
            <h2 class="accordion-header" id="heading7">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                    10 KW AC Type 2 (Guns # 3)
                </button>
            </h2>
            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
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
            <h2 class="accordion-header" id="heading8">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                    11 KW AC Type 2 (Guns # 1)
                </button>
            </h2>
            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
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
            <h2 class="accordion-header" id="heading9">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                    11 KW AC Type 2 (Guns # 1)
                </button>
            </h2>
            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
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
            <h2 class="accordion-header" id="heading10">
                <button class="accordion-button collapsed ev_list_btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                    15 KW AC Type 2 - 2G (Guns # 2)
                </button>
            </h2>
            <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample">
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
    </div>
</section>
<!-- list end -->

<?php include 'footer.php'; ?>