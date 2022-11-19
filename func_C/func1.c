#include <stdio.h>
void go_south_east(int lat, int lon) {
lat = lat - 1; 
lon = lon + 1;
}

int main() {
    int latitude =  32; 
    int lonitude = -64; 

go_south_east(&latitude, &lonitude);
printf("Стоп, теперь наши координаты: [%d, %d]\n",latitude, lonitude);
return 0;
}