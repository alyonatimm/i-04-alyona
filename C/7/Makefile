main: find.o main.o
	gcc island.o main.o -o main

fish.o: find.c find.h
	gcc -c find.c

main.o: main.c find.h
	gcc -c main.c