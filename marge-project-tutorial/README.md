## Lesson 3.7 → PHP WeakMap Explained

> PHP WeakMap হলো একটি বিশেষ ধরনের ডেটা স্ট্রাকচার, যেখানে অবজেক্ট রেফারেন্স স্টোর করা হয় কিন্তু 
> এটি গার্বেজ কালেক্টর দ্বারা ট্র্যাক করা হয়। যখন কোনো অবজেক্ট ব্যবহার হয় না, তখন তা স্বয়ংক্রিয়ভাবে 
> WeakMap থেকে সরিয়ে ফেলা হয়। WeakMap মূলত মেমোরি অপটিমাইজেশনের জন্য ব্যবহৃত হয়, বিশেষত 
> যখন অবজেক্টের লাইফটাইম নিয়ন্ত্রণ করতে হয়।

### Use Cases

```text
Probably will not use weak maps directly but rather you will use some
package or a framework that uses weak maps behind the scenes.

    -- WeakMap Uses
    -- Caching
    -- Memoization
    -- Prevent Memory Leaks
```