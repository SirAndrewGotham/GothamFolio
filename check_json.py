import json

try:
    with open('database/seeders/data/languages.json', 'r') as f:
        data = json.load(f)
    print("JSON is valid.")
except json.JSONDecodeError as e:
    print(f"JSON Decode Error: {e}")
except FileNotFoundError:
    print("File not found: database/seeders/data/languages.json")
