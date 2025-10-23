 #include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <Servo.h>

// Deklarasi objek untuk dua motor servo
Servo servoMotor1;
Servo servoMotor2;

// Definisi pin untuk sensor hujan dan sensor kelembaban tanah
#define pin_hujan 16 // pin D0
int pin_tanah = A0; // pin A0

// Variabel untuk menyimpan data dari sensor hujan dan sensor kelembaban tanah
int DataDigitalHujan, DataAnalogTanah;

// Konfigurasi WiFi dan server
const char* ssid = "SUKENDI";
const char* password = "alipgemoy123";
const char* server = "192.168.1.9";
//monitoringrainshelterbawang.000webhostapp.com

void setup() {
  Serial.begin(9600);
  pinMode(pin_tanah, INPUT);  // Menetapkan pin sensor tanah sebagai input
  pinMode(pin_hujan, INPUT); // Menetapkan pin sensor hujan sebagai input
  servoMotor1.attach(14, 500, 2400); // Menggunakan pin 14/D5 untuk servoMotor1
  servoMotor2.attach(13, 500, 2400); // Menggunakan pin 13/D7 untuk servoMotor2

  // Mulai koneksi WiFi
  WiFi.begin(ssid, password);
  // Tunggu hingga terhubung ke WiFi
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print("Terputus");
    delay(500);
  }
  Serial.print("Terhubung");
  }

void loop() {
  // Baca nilai dari sensor kelembaban tanah 
  DataAnalogTanah= analogRead(pin_tanah);
  int DataAnalogTanah2 = map(DataAnalogTanah,1023,0,0,100);
  Serial.print("Mositure : ");
  Serial.println(DataAnalogTanah2);
  delay(500);
  // Baca nilai dari sensor hujan
  DataDigitalHujan = digitalRead(pin_hujan);
  Serial.print("Nilai Sensor Hujan = ");
  delay(500);
  
  // Koneksi ke server dan kirim data
  WiFiClient client;
  HTTPClient http;

  // Kirim data sensor tanah
  String Link = "http://" + String(server) + "/monitoringrainshelter/app/kirimdata.php?tanah=" + String(DataAnalogTanah2);
  http.begin(client, Link);
  http.GET();
  http.end();
  delay(500);
  // Kirim data sensor hujan
  String Link2 = "http://" + String(server) + "/monitoringrainshelter/app/kirimdata2.php?cuaca=" + String(DataDigitalHujan);
  http.begin(client, Link2);
  http.GET();
  http.end();
  delay(500);
  
  // Mengatur posisi servo berdasarkan kondisi sensor
  if (DataDigitalHujan == 0 && DataAnalogTanah2 >= 50 ) { // Hujan Cukup Air
    Serial.println("Hujan & Cukup Air");
    servoMotor1.write(180); // Atap Tertutup
    servoMotor2.write(0); // Atap Tertutup
    delay(500);
  } 
  else if (DataDigitalHujan == 1 && DataAnalogTanah2 <=49 ) { // Terang Cukup 
    Serial.println("Terang & Kurang Air ");
    servoMotor1.write(0); // Atap Terbuka
    servoMotor2.write(180); // Atap Terbuka
    delay(500);
  } 
  else if (DataDigitalHujan == 1 && DataAnalogTanah2 >=50 ) { // Terang Cukup Air
    Serial.println("Terang & Cukup Air");
    servoMotor1.write(0); // Atap Terbuka
    servoMotor2.write(180); // Atap Terbuka
    delay(500);
  }
  else if (DataDigitalHujan == 0 && DataAnalogTanah2 <=49 ) { // Hujan Kurang Air
    Serial.println("Hujan & Kurang Air");
    servoMotor1.write(0); // Atap Terbuka
    servoMotor2.write(180); // Atap Terbuka
    delay(500);
  } 
  }
