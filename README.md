# Egypt MicroBus in PHP 😊🤓   ![](https://github.com/RamyHakam/egypt-microbus/workflows/Build/badge.svg)
## How to Optimize load and unload the passengers in the Egyptian microBus 😍


In this repository you can find My view of How we can solve the load and unload issue in our traditional microBus. 👌🚀

This assumes that you have a microBus with a capacity of 15 people. and you can consider the microBus as any data structure that can hold 15 people.

![MicroBy](https://user-images.githubusercontent.com/17661342/146622529-4f606a32-ea8e-46c2-a444-aaa51ecc5573.gif)

## The main Problem ✋

In your wonderful trip using our traditional microBus in Egypt, You will find yourself struggling with some kind of a priority issue, Which you can describe as How we can optimize the passenger seats inside the microBus in a way to minimize the number of passenger moves when someone wants to get on or off at a stop station? 🤓 

## So, How we can describe the problem to start solving it? 🤔

- You have a microBus with a capacity of 15 people. 
- You decide which data structure you will use to represent the microBus.
- You have a Traffic line that contain 100 stops
- Each stop represents a station with a number from 1 to 100
- The stops are arranged in a line, and each stop has a number of passengers that are waiting to get on the microBus.
- The MicroBus is empty at the beginning of the trip.
- The microBus can hold 15 people at most.
- The microBus can stop at the next stop station if the number of passengers in the microBus is less than 15.
- The microBus can stop at the next stop if a passenger(s) wants to get off at that station.
- Each Passenger can only get on and off the microBus once.
- Each Passenger has an id and a destination. Where the destination is the stop number where the passenger wants to get off.
- Each Passenger has a move Counter. The move counter is the number of times the passenger has moved from one seat to anther.
- Your task is to find the minimum number of moves that the passengers has to make to get all the passengers to their destinations.

## Contribute!!

You are very welcomed if You want to Contribute 🥳 on that, And this is How :

- Fork The Repo.📂
- Create Your new Solution in a Class with The existing Name + your Name. 🚀
- Create a Test Class for Your Solution.☑️✅
- Extend `MainTest` Class to load the data from your input file 👌👌
- Add/Copy a new Input file in `Tests\Helper\InputFiles` Exactly With Your Test Class Name Follow The same Format for Other files!. 👨
- Validate Your Solution From Time and Space Complexity.⌛️🧪
- Create a PR against The Repo 🥳
- Let us discuss your solution in your PR 🥊🥊🥊
- Done !! You are a Contributor now 🍻

## License
MIT

**Free Software, Hell Yeah!**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)

[dill]: <https://github.com/joemccann/dillinger>
[git-repo-url]: <https://github.com/joemccann/dillinger.git>
[john gruber]: <http://daringfireball.net>
[df1]: <http://daringfireball.net/projects/markdown/>
[markdown-it]: <https://github.com/markdown-it/markdown-it>
[Ace Editor]: <http://ace.ajax.org>
[node.js]: <http://nodejs.org>
[Twitter Bootstrap]: <http://twitter.github.com/bootstrap/>
[jQuery]: <http://jquery.com>
[@tjholowaychuk]: <http://twitter.com/tjholowaychuk>
[express]: <http://expressjs.com>
[AngularJS]: <http://angularjs.org>
[Gulp]: <http://gulpjs.com>

[PlDb]: <https://github.com/joemccann/dillinger/tree/master/plugins/dropbox/README.md>
[PlGh]: <https://github.com/joemccann/dillinger/tree/master/plugins/github/README.md>
[PlGd]: <https://github.com/joemccann/dillinger/tree/master/plugins/googledrive/README.md>
[PlOd]: <https://github.com/joemccann/dillinger/tree/master/plugins/onedrive/README.md>
[PlMe]: <https://github.com/joemccann/dillinger/tree/master/plugins/medium/README.md>
[PlGa]: <https://github.com/RahulHP/dillinger/blob/master/plugins/googleanalytics/README.md>

