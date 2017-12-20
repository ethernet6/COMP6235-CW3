from math import sqrt
import operator

# A dictionary of movie critics and their ratings of a small
# set of movies
critics = {
  'Lisa Rose': {
    'Lady in the Water': 2.5, 'Snakes on a Plane': 3.5,
    'Just My Luck': 3.0, 'Superman Returns': 3.5, 'You, Me and Dupree': 2.5,
    'The Night Listener': 3.0
  },
  'Gene Seymour': {
    'Lady in the Water': 3.0, 'Snakes on a Plane': 3.5,
    'Just My Luck': 1.5, 'Superman Returns': 5.0, 'The Night Listener': 3.0,
    'You, Me and Dupree': 3.5
  },
  'Michael Philips': {
    'Lady in the Water': 2.5, 'Snakes on a Plane': 3.0, 'Superman Returns': 3.5,
    'The Night Listener': 4.0
  },
  'Claudia Puig': {
    'Snakes on a Plane': 3.5, 'Just My Luck': 3.0, 'The Night Listener': 4.5,
    'Superman Returns': 4.0, 'You, Me and Dupree': 2.5
  },
  'Mick LaSalle': {
    'Lady in the Water': 3.0, 'Snakes on a Plane': 4.0, 'Just My Luck': 2.0,
    'Superman Returns': 3.0, 'The Night Listener': 3.0, 'You, Me and Dupree':
    2.0
  },
  'Jack Matthews': {
    'Lady in the Water': 3.0, 'Snakes on a Plane': 4.0, 'The Night Listener':
    3.0, 'Superman Returns': 5.0, 'You, Me and Dupree': 3.5
  },
  'Toby': {
    'Snakes on a Plane': 4.5, 'You, Me and Dupree': 1.0, 'Superman Returns': 3.0
  } # Score of 'Superman Returns' was 4.0
}

# Returns a distance based similarity score for person1 and person2
def sim_distance (prefs, p1, p2):
    # Create a dict that holds the scores
    shared_items = {}

    # Get the list of mutually rated items
    for item in prefs[p1]:
        if item in prefs[p2]:
            shared_items[item] = 1

    # No common items found, so return 0
    if(len(shared_items) == 0): return 0

    # Calculate the score
    sum_of_squares = sum([pow(prefs[p1][item] - prefs[p2][item], 2)
    for item in shared_items])
    return 1 / (1 + sqrt(sum_of_squares))

# Find out which two persons have the most similar taste, with respect to the Euclidean distance
def find_most_similar_pair(prefs):
    scores = {}
    people = list(prefs.keys())
    for i in range(0, len(people)):
        for j in range(i + 1, len(people)):
            sim_score = sim_distance(prefs, people[i], people[j])
            scores[(people[i], people[j])] = sim_score
    sorted_scores = sorted(scores.items(), key=lambda tuple: tuple[1], reverse=True)
    result = sorted_scores[0]
    print(result)
    print("The most similar pair in terms of Euclidean distance is: " +
          "%s and %s, similarity score %.3f" % (result[0][0], result[0][1], result[1]))
    return result

# Returns the Pearson correlation coefficient for preferences of p1 and p2
def sim_pearson(prefs, p1, p2):
    # Create a list that stores mutually rated items
    shared_items = {}

    # Get the list of mutually rated items
    for item in prefs[p1]:
        if item in prefs[p2]:
            shared_items[item] = 1

    # Find the no of elements
    n = len(shared_items)

    # if they have no ratings in common, return 0
    if n == 0: return 0

    # Sum up all the preferences
    sum1 = sum([prefs[p1][it] for it in shared_items])
    sum2 = sum([prefs[p2][it] for it in shared_items])

    # Sum up all the squares
    sum1Sq = sum([pow(prefs[p1][it], 2) for it in shared_items])
    sum2Sq = sum([pow(prefs[p2][it], 2) for it in shared_items])

    # Sum up all the products
    pSum = sum([prefs[p1][it] * prefs[p2][it] for it in shared_items])

    # Calculate the Pearson score
    num = pSum - (sum1 * sum2 / n)
    den = sqrt((sum1Sq - pow(sum1, 2) / n) * (sum2Sq - pow(sum2, 2) / n))
    if den == 0: return 0

    score = num / den

    return score

# Find out which two persons have the most similar taste, with respect to Pearson's r
def find_most_similar_pair_pearson(prefs):
    # Create a dict that holds the scores
    r_scores = {}

    # Get the list of people
    people = list(prefs.keys())

    # Calculate the score
    for i in range(0, len(people)):
        for j in range(i + 1, len(people)):
            r = sim_pearson(prefs, people[i], people[j])
            pair = (people[i], people[j])
            r_scores[pair] = r

    # Sort the scores by value ascending
    r_scores = sorted(r_scores.items(), key=lambda tuple: tuple[1])

    # Get the top score
    result = r_scores.pop()

    # Print the result
    print("The most similar pair in terms of Pearson score " +
          "is: %s and %s, similarity score %.3f" % (result[0][0], result[0][1], result[1]))
    return result

# Print the scores computed by the method given
def printScore(prefs, p1, p2, scoreType=type):
    if scoreType == 'p': # Pearson
        score = sim_pearson(prefs, p1, p2)
        print("Pearson score of %s's and %s's preferences is: %.3f" % (p1, p2, score))
    else:           # Euclidean
        score = sim_distance(prefs, p1, p2)
        print("Euclidean distance btn %s and %s: %.3f" % (p1, p2, score))