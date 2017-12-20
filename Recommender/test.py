from recommendations import critics
import recommendations
# reload(recommendations)
p1 = "Lisa Rose"
p2 = "Michael Philips"
dist = recommendations.sim_distance(critics, p1, p2)
print("Euclidean distance btn %s and %s: %.3f" % (p1, p2, dist))

pScore = recommendations.sim_pearson(critics, p1, p2)
print("Pearson score of %s's and %s's preferences is: %.3f" % (p1, p2, pScore))

p1 = "Claudia Puig"
p2 = "Jack Matthews"

recommendations.printScore(critics, p1, p2, scoreType='p')
recommendations.printScore(critics, p1, p2, scoreType='e')

pair = recommendations.find_most_similar_pair(critics)
pair = recommendations.find_most_similar_pair_pearson(critics)

