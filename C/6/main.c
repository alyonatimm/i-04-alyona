#include <stdio.h>
#include <stdlib.h>
#include <locale.h>
#include "island.h"

int main()
{
    setlocale(LC_ALL, "Russian");

    island *start = NULL;
    island *i = NULL;
    island *next = NULL;
    char name[80];

for (; fgets (name, 80, stdin) != NULL; i= next) {
    next = create(name);
    if (start == NULL)
        start = next;
    if (i != NULL)
    i -> next = next;
}
display(start);
return 0;

}

