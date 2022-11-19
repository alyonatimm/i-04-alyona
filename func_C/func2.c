#include <stdio.h>
void  fotrtune_cookie(char msg[]) {
    printf("Soobshenie galsit: %s\n", msg); 
    printf("dlina soobcheniya: %lu\n", sizeof(msg));
}

int main() {
   char quotes[] = "pechen'e var polnit!"; 
   fotrtune_cookie(quotes); 
return 0;
}