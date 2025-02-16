import requests

def fetch_data(url):
    response = requests.get(url)
    if response.status_code == 200:
        return response.text
    else:
        return f"Error: {response.status_code}"

# Example usage
url = "https://www.example.com"
data = fetch_data(url)
print(data)
