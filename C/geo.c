#include <stdio.h>

int main() {
    float latitude, longitude;
    char info[80];
    int started = 0;
    puts("data=[");
    while (scanf("%f, %f, %79[^\n]\n", &latitude, &longitude, info) == 3) {
        if (started)
        printf(",\n");
        else 
            started = 1;
            if (latitude < -90 || latitude > 90) {
                fprintf(stderr, "Invalid latitude: %f\n", latitude);
                return 2;

            }
             started = 1;
            if (latitude < -180 || latitude > 180) {
                fprintf(stderr, "Invalid latitude: %f\n", longitude);
                return 2;

            }
            fprintf(stdout, "{latitude: %f, longitude: %f, info: '%s'}", latitude, longitude, info);

    }
    puts("\n]");
    return 0;
}