# Define the Fruit class
class Fruit:
    def __init__(self, name, color, taste, season):
        self.name = name            # Name of the fruit
        self.color = color          # Common color of the fruit
        self.taste = taste          # Taste profile (e.g., sweet, sour)
        self.season = season        # Season in which the fruit is available
    
    def describe(self):
        return (f"The {self.name} is {self.color} in color, tastes {self.taste}, "
                f"and is commonly available during the {self.season} season.")

# Create instances of different fruits
apple = Fruit(name="Apple", color="Red", taste="Sweet", season="Autumn")
banana = Fruit(name="Banana", color="Yellow", taste="Sweet", season="All year")
orange = Fruit(name="Orange", color="Orange", taste="Citrus", season="Winter")
mango = Fruit(name="Mango", color="Yellow", taste="Sweet", season="Summer")
lemon = Fruit(name="Lemon", color="Yellow", taste="Sour", season="All year")

