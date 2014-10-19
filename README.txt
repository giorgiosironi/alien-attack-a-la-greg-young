In this attempt I'm trying to make Aggregates modify their internal state basing on the Events they emit, for maximum consistency and auditing:
http://cre8ivethought.com/blog/2009/11/12/cqrs--la-greg-young
(and possible Event Sourcing where Aggregates rebuild themselves)

I'm also using an outside-in approach starting from acceptance tests that talk to a World object instead of modeling only the domain, to bring out integration issues and practical concerns (such as randomness, events projecting, setup problems) early.
