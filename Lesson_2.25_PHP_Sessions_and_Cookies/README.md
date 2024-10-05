## Lesson 2.25—PHP Sessions & Cookies - Output Buffering—Headers Already Sent Warning.

### Sessions & Cookies

```text
As you know request in php are stateless but sessions and cookies can be used
in addition to other things like databases caches files and so on to retain the
state.

Difference between the cookies and sessions is that cookies are stored on a client
site on users computer for example while sessions are stored on the server also by
default session is destroyed as soon as the browser is closed while cookies can
remain as long as the set expiration date or until the cookie is deleted.

In order to use sessions we need to start the sessions using session start functions.
```

```php
session_start();
```

> Note: Sessions must be started before any output otherwise you will face some issues.

### Output Buffering:

```text
    Output buffering is a mechanism where instead of sending response to the browser
right away it will buffer it somewhere like in a variable for example and will be sent 
at once.

Output buffering হলো PHP এর একটি ফিচার, যা আপনাকে ব্রাউজারে আউটপুট কখন এবং কিভাবে পাঠানো হবে তা নিয়ন্ত্রণ করতে দেয়। 
সাধারণভাবে, PHP যখনই কোনো আউটপুট (যেমন echo বা HTML) জেনারেট করে, তখনই তা সরাসরি ব্রাউজারে পাঠিয়ে দেয়। তবে, output 
buffering ব্যবহার করলে, PHP সেই আউটপুট মেমোরিতে (একটি বাফার বা স্টোরেজে) সংরক্ষণ করতে পারে এবং আপনার নির্দেশ অনুসারে 
একবারে তা ব্রাউজারে পাঠায়।

এই পদ্ধতি বিশেষভাবে দরকারি হতে পারে, যখন আপনি আউটপুট কিভাবে প্রদর্শিত হবে তা নিয়ন্ত্রণ করতে চান, বা আউটপুট পরিবর্তন করতে চান 
পাঠানোর আগে, অথবা কখনও কখনও পারফরম্যান্স বাড়ানোর জন্য।

Output buffering সাধারণত এইভাবে কাজ করে:

1. বাফার শুরু করা: যখন আপনি output buffering চালু করেন, PHP কোনো আউটপুট (HTML, echo, print ইত্যাদি) সরাসরি ব্রাউজারে 
পাঠায় না, বরং মেমোরিতে সংরক্ষণ করে।
2. বাফার পরিবর্তন করা: আপনি বাফারের ভিতরের কনটেন্ট পরিবর্তন করতে পারেন, যেমন কমপ্রেস, মডিফাই বা সম্পূর্ণরূপে বাতিল করা।
3. বাফার ফ্লাশ বা শেষ করা: স্ক্রিপ্টের শেষে বা যখন আপনি চাইবেন, তখন PHP সেই বাফারের কনটেন্ট ব্রাউজারে পাঠাবে।
```

### Output Buffering এর জন্য ব্যবহৃত সাধারণ ফাংশন

```text
1. ob_start(): Output buffering শুরু করে।
2. ob_get_contents(): বাফারের ভিতরের কনটেন্ট ফেরত দেয়, যা তখনও ব্রাউজারে পাঠানো হয়নি।
3. ob_flush(): বাফারের কনটেন্ট ব্রাউজারে পাঠায়, তবে বাফারিং চালু রাখে।
4. ob_end_flush(): বাফার ফ্লাশ করে এবং বাফারিং বন্ধ করে।
5. ob_clean(): বাফারের কনটেন্ট মুছে ফেলে, কিন্তু তা ব্রাউজারে পাঠায় না।
6. ob_end_clean(): বাফারের কনটেন্ট বাতিল করে এবং output buffering বন্ধ করে।
```

### উদাহরণ: সাধারণ Output Buffering

```php
ob_start();  // Output buffering শুরু করা হলো

echo "Hello, world!";
$output = ob_get_contents();  // বাফারের ভিতরের কনটেন্ট সংগ্রহ করা হলো

ob_end_clean();  // বাফার পরিষ্কার করা হলো এবং বন্ধ করা হলো

echo "Buffered output: " . $output;  // এখন বাফার থেকে আউটপুট দেখানো হচ্ছে
```

### Output Buffering এর ব্যবহারিক ক্ষেত্র

```text
১. হেডার ম্যানিপুলেশন
PHP তে আউটপুট পাঠানোর আগে হেডার পাঠাতে হয়। যদি আপনি আউটপুট পাঠানোর পর হেডার পাঠাতে চান, 
তাহলে PHP এর একটি এরর দেয়। Output buffering এর মাধ্যমে আউটপুট বিলম্বিত করে, আপনি হেডারগুলো
প্রথমে পাঠাতে পারেন।

২. টেমপ্লেট সিস্টেম
Output buffering টেমপ্লেট ইঞ্জিন বা সিস্টেমে ব্যবহৃত হয়, যেখানে বিভিন্ন টেমপ্লেট ফাইলের আউটপুট বাফারে ধরে রাখা 
হয় এবং পরে তা নিয়ন্ত্রণ করে দেখানো হয়।

৩. পারফরম্যান্স বৃদ্ধি
Output buffering দ্বারা আপনি বারবার আউটপুট পাঠানোর বদলে একবারে তা পাঠাতে পারেন। এটি নেটওয়ার্ক কল কমিয়ে পারফরম্যান্স বৃদ্ধি করতে পারে।

৪. কমপ্রেশন: বাফারের ভিতরের আউটপুট কমপ্রেস করে পাঠানো যেতে পারে, যা নেটওয়ার্ক ডেটার পরিমাণ কমিয়ে লোডিং টাইম কমাতে সাহায্য করে।

৫. আউটপুট সংগ্রহ: যদি কোডের বিভিন্ন অংশে আউটপুট জেনারেট করা হয়, তবে output buffering এর মাধ্যমে সেই 
আউটপুটগুলোকে সহজে সংগ্রহ করে, প্রয়োজনমত পরিচালনা করা সম্ভব।

সারসংক্ষেপ:
Output buffering PHP তে একটি শক্তিশালী টুল, যা আপনার আউটপুট কিভাবে এবং কখন ব্রাউজারে পাঠানো হবে তা নিয়ন্ত্রণ 
করতে দেয়। এটি আপনাকে আউটপুট সংগ্রহ, পরিবর্তন এবং বিলম্বিতভাবে পাঠাতে সাহায্য করে। এছাড়াও, পারফরম্যান্স বৃদ্ধি এবং হেডার 
ব্যবস্থাপনার জন্য Output buffering একটি গুরুত্বপূর্ণ ফিচার।
```