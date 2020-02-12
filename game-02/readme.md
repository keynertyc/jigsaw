# Game 02

## Context

A service named YOLO synchronously calls an API named WTF. WTF tends to be very unstable, having latency peaks every now and then that end in response timeouts. If too many timeouts pile up, YOLO's servers may overload and suddenly go down.

## Constraints

- YOLO only waits up to 30 seconds for each call made to WTF.
- YOLO's server has a limited capacity of 10 simultaneous requests.
- YOLO has at least 5 requests per second.
- YOLO is using the best server in the market.
- YOLO needs to make synchronous calls to WTF in each request.

## Challenge

You're required to design an architecture using design patterns that allow YOLO to find out when WTF is having trouble processing requests. Ideally, this architecture should let YOLO know when to stop issuing calls to WTF until WTF is available again.

Be sure to answer this question by outlining the concepts used to tackle the problem, as well as all meaningful interactions between the architecture's components. No programming is required!

## Solution

As YOLO needs to make synchronous calls to WTF.

I think you have 2 options: 

- Implement RETRY PATTERN: With that, YOLO will invoke service and if the request fails, Application will wait for a short interval and tries again; if the request fails again, the application will wait for a longer interval and tries again.

![Imgur](https://i.imgur.com/Tr0YBp7.png)

If a failure is expected to be more long lasting, it may be more appropriate to implement the Circuit Breaker Pattern.

- Implement CIRCUIT BREAKER PATTERN: With that, YOLO should monitor the number of recent failures that have occurred, and then use this information to decide whether to allow the operation to proceed or return an exception immediately.

The Retry Pattern enables an application to retry an operation in the expectation that it will succeed. The Circuit Breaker pattern prevents an application from performing an operation that is likely to fail.
