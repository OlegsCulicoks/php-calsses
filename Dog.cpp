#include <iostream>

class Dog {
public:
    
    std::string name;
private:
    
    int age;

public:
    
    Dog(std::string dogName, int dogAge) : name(dogName), age(dogAge) {}

    
    void birthday() {
        age++;
    }

    
    void woof() {
        std::cout << name << " saka: Woof!" << std::endl;
    }
};

int main() {
    
    Dog myDog("Reksis", 6);

    
    myDog.birthday();

    
    myDog.woof();

    return 0;
}
