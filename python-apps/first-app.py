import json
import facebook

def main():
    token = {}
    graph = facebook.GraphAPI(token)

    fields = 'id, email, gender'
    profile = graph.get_object('me', fields = fields)
    print(json.dumps(profile, indent=4))


if __name__ == "__main__":
    main()

