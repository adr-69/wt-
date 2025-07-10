#include <iostream>
#include <string>
#include <unistd.h>
using namespace std;
void clear() { system("clear"); }
void space() { cout << "\n"; }
void border() {
	cout << string(40,'-');
}

int end() {
	cout << "Ended. Single ka talaga eh.\n";
	string end;
	cin >> end;
	while (true) {
		break;
	}
return 0;
}
int userprofile() {
	space();
	cout << "[ USER PROFILE ]\n";
	cout << "SingleUser, walang ibang gustong mag-log in sa buhay mo.\n";
	cout << "STATUS: Single. Kasi kahit ikaw, ayaw mo nang umasa.\n";
	space();
return 0;
}

int systemupdate() {
	space();
	cout << "[ SYSTEM UPDATE ]\n";
	cout << "No updates available. Kasi kahit anong update, hindi pa rin sya babalik\n";
	cout << "Your're up to date, but your love life's still stuck in 2019.\n";
	space();
return 0;
}

int musicplayer() {
	space();
	cout << "[ MUSIC PLAYER ]\n";
	cout << "No songs found. Kasi wala nang kantang kayang ilarawan ang sakit mo.\n";
	cout << "Playlist empty. Puro alaala lang ang pinapatugtug mo sa isip mo.\n";
	space();
return 0;
}

int filemanager() {
	space();
	cout << "[ FILE MANAGER ]\n";
	cout << "No shared files. Kasi wala kang pinagkakatiwalaan\n";
	cout << "Files empty. Parang chat mo seen lng palagi.\n";
	space();
return 0;
}

int battery() {
	space();
	cout << "[ BATTERY ]\n";
	cout << "100% charged. Pero kahit anong puno ng energy mo, wala pa ring sumasagot sa chat mo.\n";
	cout << "Charged ka nga, pero wala ka namang pinupuntahan.";
	space();
return 0;
}

int calendar() {
	space();
	cout << "[ CALENDAR ]\n";
	cout << "No events scheduled. Ni sarili mong kaarawan, walang may pakialam\n";
	cout << "Puno ang kalendaryo ng iba, pero ikaw... blangko, gaya ng puso mo.\n";
	space();
return 0;
}

int mnessages() {
	space();
	cout << "[ MESSAGES ]\n";
	cout << "No new messages. Ilang taon ka nang hindi pinapansin.\n";
	cout << "Sila masaya sa iba, ikaw naghihintay pa rin sa wala.\n";
	space();
return 0;
}

int contacts() {
	space();
	cout << "[ CONTACTS ]\n";
	cout << "0 Contacts. Wala talagang nanatili\n";
	cout << "Hindi ka nila kinalimutan... kasi hindi ka nila kailanman naalala.\n";
	space();
return 0;
}

int bluetooth() {
	space();
	cout << "[ BLUETOOTH ]\n";
	cout << "No paired devices. Gaya mo, walang karapat-dpat i pair.\n";
	cout << "Kahit signal mo bukas na, wala ka paring gustong kumonek.\n";
	space();
return 0;
}

int wifi() {
	space();
	cout << "[ WIFI ]\n";
	cout << "No connection found. Wala talagang gustong makipag-ugnayan sayo.\n";
	cout << "Naghahanap ka, pero wala talagang naghanap sayo.\n";
	space();
return 0;
}

int singleOS() {
	cout << "SingleOS | v9.9.9 | 69 | SINGLE USER MODE \n";
	cout << "README\n";
	cout << "SingleOS Simulation\n";
	cout << "This OS for Entertainement Only. Pls Enjoy :) \n";
	border();
	space();
	cout << "[1] Wifi\n";
	cout << "[2] Bluetooth\n";
	cout << "[3] Contacts\n";
	cout << "[4] Messages\n";
	cout << "[5] Calendar\n";
	cout << "[6] Battery\n";
	cout << "[7] File Manager\n";
	cout << "[8] Music Player\n";
	cout << "[9] System Update\n";
	cout << "[10] User Profile\n";
	cout << "[11] Shutdown\n";
	
	while (true) {
		string app;
		cout << "user@single/~ ";
		getline(cin, app);
		
		if (app == "1") {
			wifi();
		} else if (app == "2") {
			bluetooth();
		} else if (app == "3") {
			contacts();
		} else if (app == "4") {
			mnessages();
		} else if (app == "5") {
			calendar();
		} else if (app == "6") {
			battery();
		} else if (app == "7") {
			filemanager();
		} else if (app == "8") {
			musicplayer();
		} else if (app == "9") {
			systemupdate();
		} else if (app == "10") {
			userprofile();
		} else if (app == "11") {
			clear();
			end();
		}
	}
	
return 0;
}

int login() {
	cout << "SignleOS v1.0 [Single User Mode]\n";
	cout << string(40,'-');
	cout << "\nLogin Verification \n \n";
	string username, password, relationship;
	cout << "New Account \n";
	while (true) {
		cout << "Username: ";
		getline(cin, username);
		cout << "Password: ";
		getline(cin, password);
		space();
		cout << "In a Relationship (yes/no)?: ";
		getline(cin, relationship);
		if (relationship == "yes") {
			cout << "This is for Single ONLY!!!\n";
			sleep(1);
			break;
		} else if (relationship == "no") {
			cout << "Note This Message: \n";
			cout << "\nAngsakit noh?? Di ka pinili ng gusto mo. May iba na sya hahaha!\n";
			cout << 
			sleep(5);
			clear();
			singleOS();
		} else {
			cout << "Valid\n";
			sleep(1);
			clear();
			login();
		}
	}
return 0;
}
int kernel() {
	cout << "Kernel Initialization...\n";
	sleep(2);
	clear();
	usleep(100000);
	cout << "Core Kernel Startup\n";
	usleep(100000);
	cout << "Initializing core subsystems...\n";
	usleep(100000);
	cout << "Memory Manager loaded\n";
	usleep(100000);
	cout << "Virtual Memory: Enable\n";
	usleep(100000);
	cout << "Paging System initialized\n";
	usleep(100000);
	cout << "Kernel Heap allocated\n";
	usleep(100000);
	cout << "Interrupt Descriptor Table set\n";
	usleep(100000);
	cout << "Enabling Interrupts... OK\n";
	sleep(1);
	clear();
	cout << "Driver & Hardware Layer\n";
	sleep(1);
	usleep(100000);
	cout << "Initializing device drivers...\n";
	usleep(100000);
	cout << "Keyboard driver... OK\n";
	usleep(100000);
	cout << "Display driver... OK\n";
	usleep(100000);
	cout << "Filesystem handler: EXT-S detected\n";
	usleep(100000);
	cout << "Serial ports: COM1, COM2... OK\n";
	sleep(1);
	clear();
	cout << "System Services...\n";
	sleep(1);
	usleep(100000);
	cout << "system Clock initialized\n";
	usleep(100000);
	cout << "Timer frequency ser 1000Hz\n";
	usleep(100000);
	cout << "Process Sheduler loaded\n";
	usleep(100000);
	cout << "Starting PID 0 (idle process)\n";
	usleep(100000);
	cout << "User Manager: Signle-Mode On\n";
	usleep(100000);
	cout << "System Logs: /log/booting.sng\n";
	usleep(100000);
	cout << "Sound system initialized\n";
	sleep(1);
	clear();
	cout << "SingleOS Themed Kernel Logs\n";
	sleep(1);
	cout << "No multi-user mode detected\n";
	usleep(100000);
	cout << "Skipping romantic process handler\n";
	usleep(100000);
	cout << "Trust system active\n";
	usleep(100000);
	cout << "Stability protocols enabled\n";
	usleep(100000);
	cout << "Mood Stabilizer v1.0 initialized\n";
	usleep(100000);
	cout << "No past logs detected - Fresh start\n";
	sleep(1);
	clear();
return 0;
}
int bootloader() {
	cout << "Initialiing Bootloader...\n";
	sleep(1);
	cout << "Detecting CPU architecture...\n";
	usleep(100000);
	cout << "CPU: x86_32\n";
	usleep(100000);
	cout << "Checking system memory...\n";
	usleep(100000);
	cout << "RAM: 2048 MB detected...\n";
	usleep(100000);
	cout << "Scanning hardware devices...\n";
	usleep(100000);
	cout << "SATA controler initialized...\n";
	usleep(100000);
	cout << "Loading kernel from /boot/sing.leos.kml\n";
	usleep(100000);
	cout << "Verifying kernel integrity...\n";
	sleep(1);
	space();
	clear();
	cout << "Starting kernel in \n";
	space();
	cout << "Boot Comeplete... Pero hindi ka pa rin makamove-on sakanya.\n";
	sleep(1);
	cout << "3\n";
	sleep(2);
	cout << "2\n";
	sleep(3);
	cout << "1\n";
	clear();
	sleep(1);
return 0;
}
int opening() {
	sleep(1);
	cout << "> SingleOS\n";
	sleep(1);
	cout << "Loading...\n";
	sleep(1);
	clear();
	sleep(1);
	cout << "Message:   Built for the Single User.";
	sleep(1);
	clear();
return 0;
}
int main() {
	opening();
	bootloader();
	kernel();
	login();
    singleOS();
return 0;
}
