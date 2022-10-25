<?php 
/*
    copy(JSON.stringify([...temp1.querySelectorAll("tr")].map(i => {
    let ob = {};
    i.children.forEach(child => ob[child.classList[0]] = child.textContent.trim());
    ob.img_src = i.querySelector(".avatar img")?.src || "";
    return ob;
})))
*/
$review_data = `[
    {
      "id": "33",
      "submitted": "2022/04/11 16:39",
      "author": "Colm Ó Baoill",
      "rating": "★★★★★ (5)",
      "text": "Luckily I came across DC Physiotherapy. Having had 3 micro-discectomies done on my back over the past 20 years, I thought I was facing into surgery again. 6 sessions on the Spinal Decompression table has eliminated the pain and I am able to work and drive without any pain. A big shout out to James for his thoroughness and professionalism and the exercise regime that he has put together to build up the back going forward. Highly recommend that you give them a try if you are having any issues with your back.",
      "language": "en",
      "retrieved": "2022/04/11 16:53",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJzYSJFJSE2MHNTaa0S5ClI8aDNuiXq1RM1oux-D=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "36",
      "submitted": "2022/05/05 11:18",
      "author": "Cat D",
      "rating": "★★★★★ (5)",
      "text": "Rating needs more stars! After only being offered more pain masking drugs and injections by medical professionals, a friend recommended these guys to me. Not even 10 sessions in and I could touch my toes again! Physios themselves are gentle folk, lovely to deal with, and give realistic advise and a great deal of comfort.",
      "language": "en",
      "retrieved": "2022/05/05 11:44",
      "img_src": "https://lh3.googleusercontent.com/a-/AOh14GgjYSZ1cfc8pe8yZl9f3AI-F7Bb3NCmPGWxv1QhMA=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "35",
      "submitted": "2022/04/29 12:09",
      "author": "Jason Ray",
      "rating": "★★★★★ (5)",
      "text": "Excellent service, highly recommended. I had a severe back injury, seen 3 chiropractors & none could help. After 2 sessions with DC physio I was walking properly again, after the full 10 sessions I am back to normal. Thank you guy's.",
      "language": "en",
      "retrieved": "2022/04/29 12:43",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJw8eR75uc_FNMyzY7CrMC3wz9_LsElAQrUzrgAm=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "39",
      "submitted": "2022/07/28 15:41",
      "author": "Dave Leacy",
      "rating": "★★★★★ (5)",
      "text": "I have suffered lower back pain for quite a while but particularly since July 2021. MRI scan showed up protruding discs at L4&5 but there was no sign of a referral to an Orthopaedic surgeon in the offing. I did a little research and found DC Physiotherapy and their Spinal Decompression therapy. I was prepared to try anything and am particularly glad that I did. After 4 of a proposed 10 sessions with Eoin Dennis, my pain had eased considerably. The therapy was painless and coupled with the stretching exercise that I was given I improved to a level I never imagined.  I completed the 10 sessions as recommended and am really happy with the results. I would heartily recommend DC Physiotherapy and their decompression therapy for anybody with chronic lower back pain.\n            \tWhile my golf hasn't improved a lot, at least I can enjoy it again.",
      "language": "en",
      "retrieved": "2022/07/28 15:45",
      "img_src": "https://lh3.googleusercontent.com/a-/AFdZucq-_AWASIc1iXfyUaFFOsBKsr1dtwMGkPoitjVx=s128-c0x00000000-cc-rp-mo-ba3"
    },
    {
      "id": "43",
      "submitted": "2022/09/07 13:17",
      "author": "david higgins",
      "rating": "★★★★★ (5)",
      "text": "My GP recommended DC physio after I was diagnosed with a herniated disc.\n            \tThe lads Eoin and Rob were fantastic. I had a course of 10 Spinal decompression treatments. After 3 rounds there was a profound difference in my pain levels. Along with rest and an exercise routine it meant my recovery time was a lot shorter then my Surgeon expected. Fortunately I no longer need an operation. I can not recommend the lads highly enough.",
      "language": "en",
      "retrieved": "2022/09/07 13:44",
      "img_src": "https://lh3.googleusercontent.com/a/AItbvmnq5dFmAqc055oTPcY1RY5kSce0_2B9bpaonlFJ=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "31",
      "submitted": "2022/04/05 15:59",
      "author": "Neil Mc Connon Ireland",
      "rating": "★★★★★ (5)",
      "text": "I'm 54, self-employed and have a bad neck injury. I was facing an operation but decided to checkout DC Physiotherapy and their Spinal decompression programme.  Best thing I did. James Greene was my physiotherapist and did an impeccable job. His knowledge about human anatomy was extraordinary. I'll never be able to thank him enough for helping me get back to work. I'm off pain killers , working everyday but have to keep up my exercises. A small price to pay for a healthy life.  Highly recommended",
      "language": "en",
      "retrieved": "2022/04/05 16:54",
      "img_src": "https://lh3.googleusercontent.com/a-/AOh14GjtK0jLNg9lrCPWJrWcgiSl1vKXiw3qSdlAFI587g=s128-c0x00000000-cc-rp-mo-ba3"
    },
    {
      "id": "44",
      "submitted": "2022/09/07 17:05",
      "author": "Vicky Dolan",
      "rating": "★★★★★ (5)",
      "text": "With bulging disc on the top of my spine, I wanted to find a solution that would save me from having to go through surgery. I had 10 sessions with Eoin, a pure pro who put me at ease straight away. The manual manipulation, although painful, further helped with the issues in my neck. I do feel a difference and do think that this procedure has taken away the need for surgery, a final MRI will tell me but so glad I found this treatment. I will miss the chats with Eoin, made the time go in so fast. He is a great asset to the team!!!",
      "language": "en",
      "retrieved": "2022/09/07 17:43",
      "img_src": "https://lh3.googleusercontent.com/a/AItbvmnPMdeOrWrUT8oesU6mFZx-gyRwhRqLH4SXBDg4=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "42",
      "submitted": "2022/08/29 14:33",
      "author": "Patrick Cussen",
      "rating": "★★★★★ (5)",
      "text": "I'd like to thank Eoin and the team at DC Physio for the excellent care provided .. I was barely able to walk in the door when I arrived but thanks to the brilliant treatment I received I'm feeling great now .. thanks a mil folks !!!",
      "language": "en",
      "retrieved": "2022/08/29 15:44",
      "img_src": "https://lh3.googleusercontent.com/a/AItbvmm0AGNdAU-hjksGwOsJxbfzo2Sc7dJUUygq4XGT=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "41",
      "submitted": "2022/08/18 21:16",
      "author": "Juan Manuel Santos",
      "rating": "★★★★★ (5)",
      "text": "Excellent professionals. Special mention to Sharon, she treated me from an awful neck pain. In just 2 sessions felt like new. Thanks again.",
      "language": "en",
      "retrieved": "2022/08/29 02:57",
      "img_src": "https://lh3.googleusercontent.com/a-/AFdZucpjN3OWJxPllHoAGdkKDVYFQj7uhjnuv-JAiWntJg=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "40",
      "submitted": "2022/08/18 17:57",
      "author": "Claire Rosa Mc keever",
      "rating": "★★★★★ (5)",
      "text": "I had been suffering with my back for 6 months before attending DC physiotherapist  I had a disc bulge of 15 mm in my lower back . On review of my MRI results David advised spinal decompression would be suitable for my injury . Haven been told by my GP that surgery was the only option to fix me I decided to try out some decompression as another option . From my first session with Eoin at the start of July where I practically crawled in with a pain on a scale of 10 to my 10th session today where I walked out upright with no pain I cannot thank Eoin enough for all he done for me .\n            \tFrom feeling like I would never get better to been  pain free today , with the advise and exercises I was given to follow I am on the right path to getting myself back to 100% .\n            \tI would highly recommend dc physiotherapist to anyone who is suffering as they have really helped me and put me on the right path to getting myself back to a pain free life .",
      "language": "en",
      "retrieved": "2022/08/18 18:48",
      "img_src": "https://lh3.googleusercontent.com/a/AItbvmk3wG3pZ58GSURWwxUWGP9coaZp-w1uBoN1s3Na=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "38",
      "submitted": "2022/06/20 19:06",
      "author": "Alice Connaire",
      "rating": "★★★★★ (5)",
      "text": "I highly recommend Dave and all the team at DC Physiotherapy. I researched alternatives to L5-S1 disc herniations before deciding to book a Nerveblock with the Surgeon. Most other treatments only offered very short term relief. I was pain free after 9 Sessions and able to get on with my life. Not only did the spinal decompression treatment work for me, it was also clear that the team really have their clients welfare at heart.",
      "language": "en",
      "retrieved": "2022/06/20 20:00",
      "img_src": "https://lh3.googleusercontent.com/a-/AOh14GhlOts3auUJ3VS66OjPbFg1YLL7fKu9A74UriEK2w=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "37",
      "submitted": "2022/05/23 12:12",
      "author": "Viva School Of Dance .com",
      "rating": "★★★★★ (5)",
      "text": "Saw the ad and decided to give it a try. Had problems with my lower back for years now and no amount of physio was making any difference. And it did make difference. I can get up from sitting down position, I can jog without having pains during or after, I can teach dance without getting shooting pains. However, you have got to do the exercises while you are getting the treatments and after. Massive thank you Eoin Dennis for patience and support. Definitely highly recommend",
      "language": "en",
      "retrieved": "2022/05/23 12:48",
      "img_src": "https://lh3.googleusercontent.com/a-/AOh14Gjcv8cfuQvf67uaolPpFDOWWed-U4kLUBgf25wcWg=s128-c0x00000000-cc-rp-mo-ba2"
    },
    {
      "id": "34",
      "submitted": "2022/04/12 17:23",
      "author": "diana mautner",
      "rating": "★★★★★ (5)",
      "text": "I have disc protrusion. Today I finished my tenth treatment.  When I arrived, I limped to my right leg and walked bent over.  Now I walk normally and don't limp anymore.  Robbie is very patient and kind. Thank you very much.\n            \tStrongly recommend.",
      "language": "en",
      "retrieved": "2022/04/12 17:51",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJyiJB0eYgmW8rNPamr6yKmOY8YJj_aiYxYd-YBk=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "32",
      "submitted": "2022/04/06 15:38",
      "author": "Mark Sherwin",
      "rating": "★★★★★ (5)",
      "text": "It was 4 àweeks ago when I limped into DC Physiotherapy with back, hip,and leg pain  that i had for about 18 months. That was then this is now. I am writing  this post after just finishing a 10k walk. I can't thank DC physiotherapy enough.   I would like say a separate thank you to James who from day one   guided, encouraged and gave me the confidence to get some normal back in to my life and most importantly be able to get back out walking .\n            \tHighly recommended these guys.\n            \tThanks again\n            \tMark",
      "language": "en",
      "retrieved": "2022/04/06 15:44",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJy3Y9rjidd2UgtQ_xdN01ksBT9nvclvjV9YnHej=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "30",
      "submitted": "2022/04/01 18:54",
      "author": "Maire Lawler",
      "rating": "★★★★★ (5)",
      "text": "My back has been getting steadily stiffer and painful despite my own efforts to stay flexible the last few years. With just one session with James,  I woke up for the first time pain free.  I'm only sorry I didnt attend this practice earlier with my back.",
      "language": "en",
      "retrieved": "2022/04/01 19:49",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJzu2VshNv5CaGgCjfc878Ykz6XBrX2j1Yd_9Jwo=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "25",
      "submitted": "2022/01/05 16:20",
      "author": "Michael Larkin",
      "rating": "★★★★★ (5)",
      "text": "I had a neck problem with a disc protruding giving me huge discomfort.   My Doctor said there was nothing they could do but surgery,  which may not work.   I researched myself and found DC physiotherapy.   Dave was amazing he talked me through the procedure and after a number of sessions, I was back in the gym and playing basketball again.\n            \tA totally amazing result.   Dave was so knowledgeable and I have never looked back.  Had one or two maintenance session since,  but all is perfect now.  Could not recommend him highly enough.",
      "language": "en",
      "retrieved": "2022/01/05 16:46",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJxf44BlNSkcdIHS-hzQGW8rF97r4CW6zUG1Xdna=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "27",
      "submitted": "2022/02/14 12:16",
      "author": "Ben Grossman",
      "rating": "★★★★★ (5)",
      "text": "Great physio. Wouldn't go anywhere else.  Bad pain in upper back and dave had me good as new in only 2 sessions.  This lad really knows what he's doing. Anyone suffering with any sort of muscle or joint pain he's your man.  Give him a shout. 11/10",
      "language": "en",
      "retrieved": "2022/02/14 12:43",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJyeBLmXlMIf_bNcOAg_XXD6ux8_Py9-f1ZL-nTs=s128-c0x00000000-cc-rp-mo-ba4"
    },
    {
      "id": "23",
      "submitted": "2021/12/15 15:47",
      "author": "Lucy Murphy Palmer",
      "rating": "★★★★★ (5)",
      "text": "After trying other physios and every drug under the sun, I searched for an alternative treatment for the severe pain my herniated discs were causing me. After a 30 min consultation with Robbie, I felt assured that he knew what he was talking about. We started a 10 session course of spinal decompression. The treatment itself was very comfortable, and I loved that it was treating the issue, rather than the symptoms. I started right after a 3 week long back spasm where I couldn't stand up or put my shoes on without help, and I am now pain free. I want to thank Robbie, Kane, and David for their help and welcoming environment throughout my course of treatment, and I would recommend this to anyone.",
      "language": "en",
      "retrieved": "2021/12/15 15:49",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJwH8ZAsrlX7ybXRVdMTpawfaThgzJB8NNIu6bGR=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "21",
      "submitted": "2021/12/09 12:51",
      "author": "Murray Moncelet",
      "rating": "★★★★★ (5)",
      "text": "I developed a lower back injury while working from home and decided to go see a physio as I was not able to do simple tasks such as putting my socks in the morning.  I was in constant pain. Robbie from DC physio was brilliant. After a few sessions with him and doing simple exercises him gave me I was able to strengthen my lover back muscles and now back to normal! Thank you again for the great care.",
      "language": "en",
      "retrieved": "2021/12/09 13:07",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJz9vWNr5GLQV_f2h_MujseMCRjYBe9cgSEh0P0=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "24",
      "submitted": "2021/12/29 14:47",
      "author": "Helen Keating",
      "rating": "★★★★★ (5)",
      "text": "I had a knee issue that needed fixing. Robbie, listened, and went through everything with me. After a few session along with the 'lovely' exercises I am now pain free. In between my knee sessions my back went into spasam, David was very quick to have me back in to see Robbie who worked his magic on my back also. Highly professional. All my aches and pains will be dealt with properly from now on.",
      "language": "en",
      "retrieved": "2021/12/29 15:46",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJyL2jTHYtVLVB1iNOc9eEIfo4H1ZR8Wu1itT9EAxRY=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "29",
      "submitted": "2022/03/04 21:58",
      "author": "Gavin Myers",
      "rating": "★★★★★ (5)",
      "text": "The first session I had with Robbie, I couldn't stand on my right foot for more than 5 seconds and the pain & restriction of movement was very worrying but 14 weeks after stem cell treatment and the Physio program that Robbie put together for me I am back out walking and even running (slowly) on a treadmill. The detail and desire to help me was very evident in ever session as we could see the program was working. I am sure Robbie gets this a lot but i couldn't recommend him highly enough.\n            \tThanks\n            \tGavin",
      "language": "en",
      "retrieved": "2022/03/18 02:46",
      "img_src": "https://lh3.googleusercontent.com/a-/AOh14GgtBVBwnGIX-n8TRyU39ScZcuSkRDqK8uV2JLBdLQ=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "28",
      "submitted": "2022/01/15 17:47",
      "author": "A Google User",
      "rating": "★★★★★ (5)",
      "text": "Last month, I developed an injury while playing football and decided to go see a physio as I was not able to do simple daily tasks of my own. Fortunately, a friend recommended physiotherapy Clondalkin and I'm so grateful to him for that now. My body has fully recovered after only a few sessions. Good Job guys!",
      "language": "en",
      "retrieved": "2022/03/02 19:46",
      "img_src": ""
    },
    {
      "id": "26",
      "submitted": "2022/01/15 17:47",
      "author": "Ciara Brady",
      "rating": "★★★★★ (5)",
      "text": "Last month, I developed an injury while playing football and decided to go see a physio as I was not able to do simple daily tasks of my own. Fortunately, a friend recommended physiotherapy Clondalkin and I'm so grateful to him for that now. My body has fully recovered after only a few sessions. Good Job guys!",
      "language": "en",
      "retrieved": "2022/01/15 18:55",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJyKeu8K6ZvKg1t7Ek-pbpYokR1H12TnvCczon8O=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "17",
      "submitted": "2021/11/02 08:58",
      "author": "David Byrne",
      "rating": "★★★★★ (5)",
      "text": "I had endured 5 years of considerable and constant pain in my lower back due to a prolapsed bulging disc. I was sure I had pretty much exhausted every available avenue. Visiting sports therapists, physiotherapists, chiropractors and an osteopath, all to no avail! I had resigned myself to surgery. Spinal decompression was the last roll of the dice. After 10 sessions I've experienced a life changing improvement! While I wouldn't say my issue is completely resolved, I have certainly being able to go about my day to day life with almost no discomfort for the first time in an age. Many thanks, DC physiotherapy!",
      "language": "en",
      "retrieved": "2021/11/02 09:45",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJxANP_RukGXsPwW-fKCVjrIy0PY86rSq8X9cTCH=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "22",
      "submitted": "2021/12/09 19:47",
      "author": "Richard Lennon",
      "rating": "★★★★★ (5)",
      "text": "Started to attend the clinic a few months ago to commence treatment for herniated discs, (disc decompression), after injuring my back. At this stage, I was unable to walk more than 50m without having to stop for a break from the pain, which was shooting down the front of my leg. I had visited the doctor on numerous occasions, received an injection for the pain, was taking pain alleviating medication generally issued to patients suffering from cancer and was sleeping approximately 4 hours per night (this was when the pain medication started to wear off).\n            \tAlso had an MRI carried out at Affidea followed by a consultation at the Hermitage clinic, where the consultant recommended back surgery for the following week.\n            \tWas Determined to find a non-invasive treatment to help my back.\n            \tHighly recommend the practice - both the physiotherapist and treatment are second to none. They worked at my pace, while gently moving forwards. The pain has all but gone, now sleeping soundly again and have recommenced training.\n            \tIf you have back pain - issues with discs - cannot recommend the guys and the treatment enough.\n            \tRobbie, Dave - keep up the good work",
      "language": "en",
      "retrieved": "2021/12/09 20:45",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJzuZ5wSBv2qCUJr6FPTTq25jnKHgmY3BqazjsTB=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "14",
      "submitted": "2021/10/10 15:05",
      "author": "Dave hudson",
      "rating": "★★★★★ (5)",
      "text": "A friend recommended DC physiotherapy to me. Before seeing David I had attended various consultations, had seven injections and a nerve blocking procedure. All with no success. I was in constant discomfort , walking even a short distance was a problem.\n            \tOn my 1st visit David explained non surgical decompression,\n            \tI did a course of 10 sessions . I am delighted to say that I can now walk freely and the discomfort has almost gone.\n            \tI will continue to attend for maintainable.\n            \tThanks David for your help and support, I would recommend you to anyone suffering with their back!\n            \tDave Hudson",
      "language": "en",
      "retrieved": "2021/10/10 15:46",
      "img_src": "https://lh3.googleusercontent.com/a-/AOh14Gj6XDqXIaMKNOo4HPDrwvG7wTrTiTamAVxQTY4-LO4=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "18",
      "submitted": "2021/11/02 10:19",
      "author": "Daniel Downes",
      "rating": "★★★★★ (5)",
      "text": "I was referred to David through a friend, I had been suffering with severe back pain for two years. David recommended I undergo spinal decompression after just a few sessions I could feel a huge improvement. I continued the full programme and have had no further issues with my back. My father also attended with the same complaint and had the same great result. I cant recommend David and his team highly enough. A great service at a very reasonable cost. I will be recommending DC Physo to all my family and friends.",
      "language": "en",
      "retrieved": "2021/11/02 10:48",
      "img_src": "https://lh3.googleusercontent.com/a-/AOh14GgBlMaE0D_gvtAouhpFLJgSInPTOt82iefs05LpBg=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "20",
      "submitted": "2021/11/19 17:06",
      "author": "bryan corry",
      "rating": "★★★★★ (5)",
      "text": "Hi I was suffering with sciatica for over two years which curtailed my movement and ability to play golf and after 3 Nerve block injections which worked less and less after each one I decided to go to DC physio after seeing an ad on Facebook. I was sceptical at first but was happy to give it a go. I had 5 sessions and after each one and a few exercises each week it got better. I am now pain free and very happy to recommend Dave and his team. If you are suffering with back pain and are fed up with painkillers and injections give it a go. I did and am very happy with the results.  Bryan",
      "language": "en",
      "retrieved": "2021/11/19 17:51",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJwQhEMVqK1befjqCX-MnCHf3xnW1cP0mJnCtheO=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "15",
      "submitted": "2021/10/28 10:01",
      "author": "Gerard Sealy",
      "rating": "★★★★★ (5)",
      "text": "This is the second time I used DC physio and both time were excellent ,sorted out my back ,and got me back doing my sports ,5a side and tennis in no time.\n            \tWould recommend",
      "language": "en",
      "retrieved": "2021/10/28 10:50",
      "img_src": "https://lh3.googleusercontent.com/a-/AOh14Gg2jk6HmvFMSY0ZJUmvUuJBYrTGVsrxEpe2XZ8i=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "19",
      "submitted": "2021/11/15 21:44",
      "author": "Aline Bernardini",
      "rating": "★☆☆☆☆ (1)",
      "text": "I came in after seeing all the great reviews and I was very disappointed with the service I was given. In total my visit was 30 mins with 20 min taking my information, asking me questions about my health state and in the end showed me three different exercises, he spent about 10 minutes gently rubbing my back. Overall, I came out not learning anything new and my back was still the same pain but minus the fee. I had told the physio i am still in pain but I was told to reschedule for another appointment the week after. I didn't feel the care or empathy from the physio and just seemed wanted the fee and me out the door. I am a student so I can't afford to pay this in a weekly basis with no results.\n            \tI only booked the appointment that morning so as I was leaving I seen another patient waiting so I felt why schedule me for 4:30 if it's just gonna be rushed?\n            \tThe reason why I am so disappointed is that I had previously visited a physio in Cavan ( I live in Dublin now and it's just too far) but the physio really showed an interest in resolving my pain and introduced different treatments/exercises with a real deep pressure and found the pressure point and “cleared” the pain drastically after one consultation (and no it wasn't a massage or masseuse I was looking for). So my expectations was to find similar results but was left severely disappointed.",
      "language": "en",
      "retrieved": "2021/11/15 22:54",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJz_DuiEeaVdYrxbjTK_FBbGVXPIYdE9Wo8mkFBM=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "12",
      "submitted": "2021/09/14 14:43",
      "author": "Kevin Wall",
      "rating": "★★★★★ (5)",
      "text": "I was suffering from a bulging disc. I tried many different treatments before visiting DC Physiotherapy. I had about 7 sessions and I couldn't recommend this highly enough. This treatment definitely works. Many thanks to Robbie for all the help.",
      "language": "en",
      "retrieved": "2021/09/14 14:45",
      "img_src": "https://lh3.googleusercontent.com/a-/AOh14Gg--XVDeyyt9HZSR3wLEt7N6jObAUflr_XrP0E_Mw=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "13",
      "submitted": "2021/09/23 11:45",
      "author": "Darren Birkett",
      "rating": "★★★★★ (5)",
      "text": "Having ongoing treatment for back trouble so far so good very accommodating and very thorough would highly recommend this place",
      "language": "en",
      "retrieved": "2021/09/23 12:47",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJzrFy-a8fgvRJ8TtACGUsEuUF4ZvXH_8jNIhjnZ=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "16",
      "submitted": "2021/11/01 12:44",
      "author": "Jezzer Star_dust7",
      "rating": "★☆☆☆☆ (1)",
      "text": "Like anyone who suffers with back pain knows you'll try anything once out of desperation, also you will know there are people queueing up to take your money for magic beans offering revolutionary treatments that will give you your life back, could it be I asked ? Had the holy grail of spinal medicine that has alluded man till now been discovered in a small room in clondalkin village.Reason goes out the window when your in pain, I was aware going into the treatment sessions not one physiotherapy professional body recommends this treatment, in fact many health bodies recommend against its use hence why most places don't offer it , I was also aware the studies the owner uses to promote it is what researchers call 'junk science' for example in the john lesie study the owner promotes, the study was non randomized , non controlled,non blinded  with a small sample size of only 18 people and was most likely paid for by the maker of the equipment. Every few years traction is rebranded from inversion tables to motorised traction  to the now computerised traction or as they call it 'non surgical spinal decompression'!...when I went to book my appointment I was amazed how quickly the appointments fill up, so much so in fact the owner now has two tables on the go 6 days a week to cater for the many desperate people like myself, After my sessions my feeling on it was there was no change in my back pain but a big change in my bank balance , I also felt anyone who does respond to treatment would have equally responded to a few yoga or pillates sessions....in America where these 'non surgical decompression tables' are ten a penny and pushed by pseudo science chiropractors they have made the news due the lack of scientific evidence to back then up. A quick Google and you can find a news article by NBC into non surgical spinal decompression and the multiple investigations around its use..",
      "language": "en",
      "retrieved": "2021/11/01 13:48",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJxQTQQT54xH8Q_eYCgHGVNlafiDC5uATEu34hER=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "11",
      "submitted": "2021/07/27 12:00",
      "author": "Lauren Smith",
      "rating": "★★★★★ (5)",
      "text": "I started physio with Robbie after 2+ years with on and off knee pain. I've had MRI scans, numerous doctors visits and prescriptions with no relief.\n            \tI engaged in a 6 week programme with Robbie and after these sessions I have noticed an unbelievable difference. He gave me easy but effective techniques that I can use both at home and in the gym. I am now able to walk up and down stairs, kneel and exercise as normal following Robbie's guidance while incorporating my training programme. I feel I have a better quality of life almost 100% pain free!\n            \tI would highly recommend DC Physiotherapy and Robbie for his friendly and professional service. Thanks again for your help!",
      "language": "en",
      "retrieved": "2021/08/06 04:51",
      "img_src": "https://lh3.googleusercontent.com/a-/AOh14GhuJgyYcKPiOUrTgCtzKu3_enr_kf_AXa8qBQll=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "8",
      "submitted": "2021/06/30 08:58",
      "author": "Erin Devine",
      "rating": "★★★★★ (5)",
      "text": "Visited Robbie after suffering from 10 months of back pain. In the 10 months I tried physio, acupuncture, dry needling, massages etc. I got absolutely no relief despite me continuing with the treatments. I discovered dc Physiotherapy by searching the Web for another treatment for my injury. I had 10 disc decompression therapy sessions with Robbie and after the 1st one I found instant relief which was absolutely unbelievable! Robbie was so understanding about the pain I was experiencing and approached my treatment with me in such a gentle and sensitive manner. I couldn't have asked for a better experience over the 10 sessions! Thanks again for everything Robbie.",
      "language": "en",
      "retrieved": "2021/06/30 09:52",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJxXvkN-zw1n9WPuVD9_aH35XKi41dxfUsdaW6w8=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "6",
      "submitted": "2021/05/29 18:54",
      "author": "denise nugent",
      "rating": "★★★★★ (5)",
      "text": "Heard about DC Physiotherapy from a friend , after suffering from lower back issues. I requested a call\n            \tBack via their website , I received an email back super quick and a appointment for later that evening. Robert     was excellent , very professional and I felt the benefits after a couple of sessions. Can't recommend them enough. Thanks so much again to Robert for his help.",
      "language": "en",
      "retrieved": "2021/05/29 19:47",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJyUji5LAZtk4dwIJmmQdr4afhv0o3EeK7ubPpuc=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "7",
      "submitted": "2021/06/28 20:16",
      "author": "Derek Byrne",
      "rating": "★★★★★ (5)",
      "text": "These guys have really helped me get my life back on track, I could barely walk into the place a few weeks ago , I was constantly in pain with a bulging disc in my back with no quality of life. I'm only 36 and couldn't work or play football with my kids , I was physically and mentally drained from the pain and couldn't see a way out. Since meeting David during the consultation to a few weeks of treatment I finally have my life back and almost feel 100% again.",
      "language": "en",
      "retrieved": "2021/06/28 20:51",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJyVZEOSexgIwHKZ1rbUSO0Prm22ZQx2opGfhuRN=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "9",
      "submitted": "2021/07/17 10:28",
      "author": "Rachel Roe",
      "rating": "★☆☆☆☆ (1)",
      "text": "I give one star because the Physiotherapist was a lovely guy But as a physiotherapy session 30 minutes of gentle prodding on the middle of my back gives very little relief",
      "language": "en",
      "retrieved": "2021/07/17 10:45",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJy5-WZQpxEyqeIG9hkfnHsvXrikHWg7IwQbqMTh=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "10",
      "submitted": "2021/07/17 11:56",
      "author": "Gareth O'Neill",
      "rating": "★★★★★ (5)",
      "text": "After a stop/start period with running,  I decided to make an appointment with DC Physiotherapy for treatment on a hip injury.\n            \tAfter 3 sessions with Robbie, I can honestly say I'm back on track, injury free and gradually ramping up my training runs again. He quickly got to the root of the problem and provided the correct treatment and put me on a stepped up exercise programme of building up my glute muscles, between the physio sessions.\n            \tRobbie provided a professional, excellent and friendly service that I would highly recommend",
      "language": "en",
      "retrieved": "2021/07/17 12:49",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJzdo30WD6Gc6vqPnVxFi22hdM_gMXaZSUD7M74=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "1",
      "submitted": "2020/12/16 22:39",
      "author": "Kate Madoo-Esther",
      "rating": "★★★★★ (5)",
      "text": "Absolutely amazing service and results delivered. I've had disc decompression treatments, first consultation with David then followed through by Brendan. I couldn't walk, stand straight, lie down or hold and lift my son up. I was in agony and I am so thrilled that with the treatments, excellent care and professionalism, I am now back to normal - no more pain, I can stand straight; carry on with my life normal with no aches; and most of all, I can hold my son, lift him up, play with him, and run after him! Thank you soooo much Brendan, you've been absolutely amazing. I highly recommend DC Physio and the disc decompression treatments, you will not be disappointed!",
      "language": "en",
      "retrieved": "2021/05/20 09:08",
      "img_src": "https://lh3.googleusercontent.com/a-/AOh14GiF1566x9wcSFMSGyBTxB-fvL_hLNi33L_0ztOHXA=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "2",
      "submitted": "2021/03/23 09:16",
      "author": "Gavin O'Brien",
      "rating": "★★★★★ (5)",
      "text": "I can highly recommend DC Physiotherapy in Clondalkin Village. I experienced lower back pain over the last 3-4 months as a result of working from home and it was starting to take its toll. I heard about DC Physiotherapy from friends and I am delighted I made an appointment to see David as within 5 mins, he was able to provide a root cause for the pain. Three sessions later and I am back running pain free. Thanks David for your guidance and genuine interest in my well being.",
      "language": "en",
      "retrieved": "2021/05/20 09:08",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJzc6ztld_jGZPOkMW50iQUdM0C89vcCYwsFRRcM=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "3",
      "submitted": "2021/04/17 22:31",
      "author": "David Long",
      "rating": "★★★★★ (5)",
      "text": "About two years ago I injured my lower back which caused restricted movement and a lot of sciatica pain in my left leg.\n            \tI tried ignoring it, hoping it would get better over time. surprisingly it didn't.\n            \tI went for a scan and the  the consultant said my only option was an operation to remove the section of herniated disc that was applying pressure onto the sciatica nerve.  To be honest the taught of an operation scared me.\n            \tSo I decided to try alternative treatment first.\n            \tI tried Physiotherapy, with no success. Then I tried amatsu treatment, still no success. This was leaving me with no option but to have the operation.\n            \tOne evening on Facebook an add for DC physiotherapy pop up on my page, I contacted Dave and arranged an appointment. During the appointment he completed an assessment and said he can fix my back within 8 - 10 session. To be honest I was very sceptic about this treatment. But it was worth a try.\n            \t8 session later and some home exercises (not too much). I am delighted to say I am 100% better....I was even digging up the garden last weekend and laying down railway sleepers.. I never taught this would of been possible again...\n            \tI would highly recommend DC physiotherapy and this treatment to anyone who is suffering like I was..My only regret is that I didn't find it sooner.. I could of saved myself a fortune..\n            \tDave, Thanks again for all your help. I really do appreciate you help in getting me back to a pain free life.",
      "language": "en",
      "retrieved": "2021/05/20 09:08",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJwLlkDaD-qjTOpze9d81WhSOYmzegkH8MQVeoRm=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "4",
      "submitted": "2021/04/20 14:40",
      "author": "Jacob King",
      "rating": "★★★★★ (5)",
      "text": "I have had a painful herniated disc in my neck for over 12 years .The pain travelled throughout my shoulders arms and hands.I experienced sleepless night's from time to time.When I heard about IDD therapy I decided to give it a try. After a few visit's I found a good improvement and  was soon painfree.The improvement continued throughout my treatment.I am now free from pain and painkillers. I would definitely recommend anybody with physical issues to go for IDD therapy. I am glad I did and its safe and painless.James.",
      "language": "en",
      "retrieved": "2021/05/20 09:08",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJwJ7FpIY0bMki5nHYE8ZCoJLIKsAtKQJVZxZFWQ=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "5",
      "submitted": "2021/04/16 20:36",
      "author": "Eddie O'Connell",
      "rating": "★★★★★ (5)",
      "text": "Unbelievable results after been with another Physio for 6 sessions and then been told theres nothing more we can do for you, Dave through Facebook came to my rescue. 10 Decompression  sessions later and my Harniated Disc and Siatica is almost but gone. Litterally could repay this man,I was bent over like an old man. Cheers Dave.",
      "language": "en",
      "retrieved": "2021/05/20 09:08",
      "img_src": "https://lh3.googleusercontent.com/a/AATXAJy2263sGPnnEKFceQLeGE1m2hvRQq6JiUFxHQ5i=s128-c0x00000000-cc-rp-mo"
    },
    {
      "id": "45",
      "submitted": "2022/04/25",
      "author": "Brian Clarke",
      "rating": "★☆☆☆☆ (1)",
      "text": "Firstly the positives .. my physiotherapist Eoin was great … he took the time to explain the issue I was having and the process we would be going through over the course of the sessions. He took genuine care at each session to monitor progress and advise of new exercises as needed. A real asset to the companyAs for the treatment, I certainly have gained some relief after 10 sessions but still a fair bit to go. In theory after this course I should be carrying out ongoing treatment however I will not be returning due to the attitude of the owner David.My only interaction with him was to cancel an appointment midway through my course of 10 first thing one morning for an appointment later that day as I woke up with Covid like symptoms. His response was that it was very late in the day to be cancelling and that I would not be able to have that appointment rebooked. After paying €1000 upfront I expected a more understanding approach… it was less the appointment lost and more the attitude that angered me. His only concern was had I prepaid for the appointment.Unfortunately, my dealings with him have clouded my whole view of the company and the reason for the negative review.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu039bhG9ALHI-9PJMKPFrX-eL0LLjHtiCsNOaL_=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "46",
      "submitted": "2022/07/25",
      "author": "Barbara McCann",
      "rating": "★★★★★ (5)",
      "text": "I was a bit sceptical of this treatment at first. Tried all sorts of treatments in the past to manage chronic pain, the pain always came back. I was warned that it would probably be the 4th session before I noticed any benefits. Two sessions in and I was able to sleep through the night. As rhe sessions went on, not only was I not in constant pain, I was able to engage in activities I hadn't done for years! It's like a new lease of life. Massive thanks to the team at DC Physio x.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu-QvSj0Xd2TBG8HqDoOLgCS7ij5XKwk_b6_cFqwdg=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "47",
      "submitted": "2022/06/25",
      "author": "Thomas Whelan",
      "rating": "★★★★★ (5)",
      "text": "Just finished a 10 session programme of Decompression Therapy and manipulation of my lower back.  After initially spending 4 weeks of pain staking limited mobility lying on the floor I crawled into the clinic , to say I'm 100% would be a lie however a good 90 after 6 weeks is impressive.  Lucky to have met the charismatic Eoin Dennis his professionalism and advise will never be forgotten.  Tks a mil",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu_1NvnofsR2_xdIgbVof9Nliw5xET9krka-OmIm-Q=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "48",
      "submitted": "2022/04/25",
      "author": "Yvonne Fahy",
      "rating": "★★★★★ (5)",
      "text": "I have just completed 10 spinal decompression sessions and they were worth all the travelling up and down the country for 5 weeks. I no longer have lower back pain ... just a slight ache every now and then. I had chronic pain , but ... no longer. I was treated by 3 different physiotherapists Eoin, Cian and Sharon.... each one was so professional , extremely friendly and extremely knowledgeable . Each physiotherapist had access to my file / history , so no time was wasted describing all my \"woes\" :) .. My file was updated after each session .They all were a pleasure to be with. I highly recommend David and his staff! You will be treated so well!",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu_T1QEI8EYzZ0WeDnjNgAh7zTqm0GulPDqxnnTbeg=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "49",
      "submitted": "2022/10/04",
      "author": "Ann Delaney",
      "rating": "★★★★★ (5)",
      "text": "I read about DC physio.and decided to give decompression therapy a try as I had been to four other practices and had'nt really improved. I was sceptical but prepared to give it a chance. After 5 sessions I could not believe the difference in my back and neck and after 10 I felt really well with very little pain.Eoin and Keen were very kind, helpful and gave me great advice.If you have tried everything else and it has'nt worked ,try it ,it will make a difference.A.Delaney.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu-yIaxiUVB97hJ9owmH55whEycAAeqqWc7B0EA1=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "50",
      "submitted": "2022/10/11",
      "author": "Mark Reilly",
      "rating": "★★★★★ (5)",
      "text": "Tried several physios and acupuncture three bulging discs in my back doctor recommended injections and possible surgery found dc went for decompression and havent looked back 2 years and counting pain free these guys gave me my life back 100% recommended",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu1SfMV9yPpDFBfbFOK47B70Q7jF-WDF2cGQmcR-=s40-c-c0x00000000-cc-rp-mo-ba4-br100"
    },
    {
      "id": "51",
      "submitted": "2022/03/25",
      "author": "Anna Zieminska",
      "rating": "★★★★★ (5)",
      "text": "When I first met Dave I was living with sciatica pain for few months. I was on morphine but still could not do Basic day to day activities (walking, sitting, looking after my child). I had surgery booked. I was first sceptical as I went to few other physios and they did not work for me (one even made me worst). I had 8 sessions so far and being pain free. Do not need pain killers anymore and I am back to normal. I regret onlly 1 thing - I did not meet Dave earlier. I am recomend ING him to anyone who have pack pain.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu0dwsShVGnEABa1EEfv5OvtPGE0ubQb_3c-f-ou=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "52",
      "submitted": "2022/04/25",
      "author": "Julie O Keeffe",
      "rating": "★★★★★ (5)",
      "text": "I started in DC physiotherapy 2 months ago, when I started I was in absolute agony with two bulging discs in my lower back. I had been in hospital with the pain and I had been put on a lot of strong medication to alleviate the pain (Oxycodone, Co Codemol, Tramadol, Valium and Diclac). I could honestly barely walk the first day I went to DC physiotherapy and I was feeling extremely down in myself as It was so debilitating. I am 38 and have three young children and it was extremely hard to be taking all the tablets and to feel so immobile. From the first day I started my disc compression therapy with Cein I felt better and very confident I would be so much better after ten sessions. I travelled from Waterford twice a week to the sessions and I cannot thank Cein and the lads in DC physiotherapy enough as I am now completely pain free and I have not taken any pain medication in over two weeks (which is massive for me as I had been on tablets for nearly three years). Cein was extremely professional and I felt I could ask him anything about my treatment and he had the answer for me. He is very passionate about his job and he genuinely cares for the client and wants to do everything he can to help them get better. I had my last session today (10 sessions) and I can't thank this clinic enough for making me so much better overall. I had tried everything before this treatment and nothing worked for me. I am so grateful this has worked and it feels amazing to be out of pain. Thank you so much for everything Cein and enjoy the chocs!!  Julie",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu1C_hJ1ybQOCzNI2hi0w44YDoS3iln2Nq-YSOwI=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "53",
      "submitted": "2022/06/25",
      "author": "Imran Anwar",
      "rating": "★★★★★ (5)",
      "text": "Thanks to David and your team, We just completed our 10th session with your team for my wife lower back pain, you have impressive setup and all your lads were  very helpful, from Robie, can't think 2nd guy name, most of the sessions were done by Cian new guy he is wonderful very helpful he treated us like family, Cian is great addition to your team well done all.Regards,Sigita & Imran",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu2lXWpW1PXlFSTFB3V-UUt9RpFjW7IspPbFF9h2=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "54",
      "submitted": "2022/05/25",
      "author": "John Cureton",
      "rating": "★★★★★ (5)",
      "text": "Can't rate highly enough. Was told by  2 physio  and private consultant gp that I had to have surgery as I have prolapsed disc with drop foot , only 2 sessions in with decompression therapy and things have improved 100%.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu2y2CE4-6KyiknGnFvRGWRWJsADewQ3xIl7-7Qi=s40-c-c0x00000000-cc-rp-mo-ba4-br100"
    },
    {
      "id": "55",
      "submitted": "2020/10/24",
      "author": "Saji Princy",
      "rating": "★★★★★ (5)",
      "text": "Got problem on my back while playing, went to MRI scan diagnosed with L4-L5 disc bulge.Had severe pain and could not sit/stand or walk, started taking pain killers muscle relaxant daily.Then on google I came across DC Physiotherapy, spoke to David.And after few sessions I was able to stop my pain tablets and I was feeling far better.I am happy that I went straight to David and he was able to treat me.I highly recommended David for his work.Thank you very much for helping me out.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu9IfpQQUXEsF7__RJlr67HiwkMQtz5qQi_GCTLn4Q=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "56",
      "submitted": "2022/04/25",
      "author": "Margaret Anderson",
      "rating": "★★★★★ (5)",
      "text": "Started my Treatment with James from DC Physiotherapy and the difference is amazing I would recommend this treatment 150% I'm getting back to being able to do things that I've not been able to do for a long time it's great to be able to talk and be understood about the pain and to see great results so don't suffer give it a try",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu9Zch1R6N1wXAbwve0JB6C1PLZp5nex9_cnyclw=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "57",
      "submitted": "2020/10/24",
      "author": "martina williams",
      "rating": "★★★★★ (5)",
      "text": "I developed severe tendinitis in my Achilles tendons probably from running too much during lockdown! I was running in pain all the time and would be limping for 2 days after running 8-10Km.  it was either stop running or get help.The guys at DC Physiotherapy gave me a range of exercises to do, some great advice and massage treatment. After just 3 sessions I was able to run 21km pain free and I have the tools to prevent recurrence of the injury. I couldn't be happier nor can I recommend DC Physiotherapy highly enough. Thanks guys.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu1LjnXqdbja5_9qcj9mc-gWW-98RGRfWwJxR7Ph=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "58",
      "submitted": "2021/05/18",
      "author": "Johnny Couglan",
      "rating": "★★★★★ (5)",
      "text": "I was diagnosed with 3 herniated discs aka bulging discs and was supposed to get epidural injections with no guarantee.  I decided to give the spinal decompression a go.  I had 8 sessions over 6 weeks and my back is 90% better than before.  I would recommend this treatment to anyone with herniated disc problem.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu89XeOivkFLtABAl8AT97lTO4B5tWtp-EYZgB1-=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "59",
      "submitted": "2020/10/24",
      "author": "Niall Walsh",
      "rating": "★★★★★ (5)",
      "text": "I was fairly sceptical going for my spinal Decompression treatment at first but after one session I began to see results. My consultant had suggested surgery based on my MRI results but thanks to David that's no longer necessary. Great physio, great service, highly recommended.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu0dtDlTgRt-GI6T9v6xh3XoTObdn6q5VZiPYX7G=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "60",
      "submitted": "2020/10/24",
      "author": "Bernard Birkett",
      "rating": "★★★★★ (5)",
      "text": "Hi my dear fellow sufferers,you need suffer no more with Disk or neck Pain.I was attending my doctors surgery for years roughly 25 yrs with bad back pain.my doc said it wss wear n tear after I had Xrays done 20 years ago.My condition slowly worsened and was more or less confined to an armchair.As a ladt resort having retired rhrough pain.my son booked me into the MRI clinic.within Hours my doc had been informed I had 4 ruptured disks in my Lower back Lumber area.my condition is inoperable on the grounds of damaging my spinal chord.,i decided to google in desperation all kinds of therapies for my non surgical condition.After several searches I came upon a therapy called Disk restoration nonsurgical in america.I was delighted ,Then I thought maybe theres s clinic nearer maybe in England.? I googled that and DCPhysiotherapy Clondalkin Dublin came up.I rang straight away and Spoke with David Carpenter there.I met David next day.he assessed me and Stated I would need about 8 sessions.After the first session I was pain free.I stopped my pain killers and carried on with my sessions each week.I was given light exercises anytime I got a twinge or stiffness.Im finished with DCPhysiotherapy now After 7 sessionsIm still pain free and Yesterday had my first round of Pitch and Putt.Please please take the time to ring DavidIf your in constant pain.To me David is a miracle man with his Decompression table.its a new life for me now.my back is getting stronger day by day.Thanks DAVID im one happy man.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu3jZ2aXgj79_aNve6-zOUfIfOpsxgQDQh8qHbkI=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "61",
      "submitted": "2020/10/24",
      "author": "Corrina Durran",
      "rating": "★★★★★ (5)",
      "text": "Brendan did a great job helping me with my spine and back problems. I felt great after just the first session and really appreciated his advice and thorough knowledge in his field.I would highly recommend Brendan. Hes a lovely guy too which makes the experience that much better. Thank you. Ray",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu3a_dy_v0Sj_ezwTRYtXEBMwDq5yJxTIRQTwmkf=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "62",
      "submitted": "2020/10/24",
      "author": "Igor",
      "rating": "★★★★★ (5)",
      "text": "Highly recommend DC Physiotherapy especially Brandon who helped me a lot with my lower back pain. He immediately knew how to approach my problem and how to quickly relieve my pain. Felt much better after only few sessions. Cannot recommend enough.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu2zOmg5V0zfho0ariC7XaB4y0KLCCR5Ncsdl2m5=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "63",
      "submitted": "2020/10/24",
      "author": "Deirdre O Gorman",
      "rating": "★★★★★ (5)",
      "text": "I attended David at DC Physiotherapy after breaking my wrist in an accident. I had a lot of pain plus my wrist was deformed looking after being in a cast/splint for 10 weeks. After 3 sessions of physio with David I am now pain free and on the road to a full recovery. I can highly recommend David at DC Physiotherapy in Clondalkin Village.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu1BIpW4zZXXtZ3_y7hT_Pk2uTX6P6g9ohtpG59y=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "64",
      "submitted": "2020/10/24",
      "author": "Karl Blake",
      "rating": "★★★★★ (5)",
      "text": "David is excellent at his profession. I went to him with multiple back and neck problems from an accident and I felt a big difference after each and every session. His facilities are very modern and kept extremely clean. He really knows what he is talking about when it comes to injuries. Would recommend him 110%.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu0bMH3TJNmZRpu3NCDtHNopNsz_3pKARBI5yK0R=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "65",
      "submitted": "2022/08/25",
      "author": "Ian Hayden",
      "rating": "★★★★★ (5)",
      "text": "Eoin from DC sorted a problem with my shoulder in two sessions after two years of trying other options. So DC. Thanks Ian",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu2Whahk21nMGLu8GcNdM7iaAWnMszIWqCy8NIKM=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "66",
      "submitted": "2022/01/23",
      "author": "Ross O Connor",
      "rating": "★★★★★ (5)",
      "text": "I was having issue's with my piriformis muscle and struggling with mobility at times, having visited Dave and taking on board his advice , it feels 100% again. Would highly recommend DC Physiotherapy",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu1j1rnnh8mqAqyHfohMWeSUEDDW-6htYJmH6Wcx=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "67",
      "submitted": "2020/10/24",
      "author": "Adam Morris",
      "rating": "★★★★★ (5)",
      "text": "I have used David for the past number of years to get my lower back pain under control. Having used many physio's unsuccessfully in the past, I can recommended David. He'll get you in, fix the problem without telling you that you will need to come back 4/5 times.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu3vcJhO1y6dVQ5lZpoPaTvV9gEOJgVlvXH6A0oc=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "68",
      "submitted": "2019/10/25",
      "author": "Carole Mcdonald",
      "rating": "★★★★★ (5)",
      "text": "I've had two different issues , the last 18 month's. My son recommended Dave , it was the best decision I made.  Dave is a fantastic  physio & he explains everything to you! In a way you understand. He is an extremely lovely guy and I would highly recommend him",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu1K9snM7aLWJ3E_4YaY7LY3bX0zL28l5nQVOV58=s40-c-c0x00000000-cc-rp-mo-ba2-br100"
    },
    {
      "id": "69",
      "submitted": "2020/10/24",
      "author": "Arran Murphy",
      "rating": "★★★★★ (5)",
      "text": "Brendan was the physio who look after me here. I came in, in agony with my back having just been to vhi swiftcare and was on heavy meds for the pain. He had me feeling 90% better within a day. Within a few more sessions, I was completely pain free. Excellent physio!",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu9iqtEl9I79wAN1Un-q7SiWVDtzkghjQyENiX1-LA=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "70",
      "submitted": "2022/02/23",
      "author": "irish produce",
      "rating": "★★★★★ (5)",
      "text": "Great service and the procedure was comfortable and without any pain, felt a lot better after it but I need a lot more sessions before I can say that I'm fixed but I'd recommend it to young and old as it's very affective, plus 5star service from 5star people, thanks Robert for all your help,",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu-PKrniDA2fRIC9bwrTeK43mpzECnnU6RELgjYHpQ=s40-c-c0x00000000-cc-rp-mo-ba4-br100"
    },
    {
      "id": "71",
      "submitted": "2022/04/25",
      "author": "Jackie Kenny",
      "rating": "★★★★★ (5)",
      "text": "I had  bulging disc and sciatica Thanks to dc physiotherapy my sciatica is now gone Owen was my physiotherapist very friendly and helpful",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu3NMLbbDQFjHD8oLgJgUiOfxfFYOcuyGIQ1tRpd=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "72",
      "submitted": "2019/10/25",
      "author": "Daryl Divilly",
      "rating": "★★★★★ (5)",
      "text": "I was suffering from a shoulder injury for nearly a year without any real improvement. David was recommended to me by a friend. After a few sessions i noticed a big improvement with the injury. Would be happy to recommend DC Physiotherapy to anyone",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu1NScQegjs_VrYzPzci0iqlPAS70B4LoqCIuqg1=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "73",
      "submitted": "2018/10/25",
      "author": "Leon McGrane",
      "rating": "★★★★★ (5)",
      "text": "I have had a number of sessions with DC Physiotherapy so far and have found his expertise and knowledge to be absolutely outstanding! Very professional with such a caring manner. I have already recommended David to everyone who would listen. I've no hesitation in returning in the future! Thanks for your all your help!",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu-xI8HBEim9hf4FgYzS_7vuH2RakhTKAljfKshelNc=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "74",
      "submitted": "2019/10/25",
      "author": "Eoin Kavanagh",
      "rating": "★★★★★ (5)",
      "text": "I had been suffering with back pain for a few months that came to a head recently. David diagnosed the problem within minutes and put me on the road to recovery. Feeling 100% better now, I would recommend him to everyone and I'll definitely be back if I injure myself again in the future.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu2rfrFqWlxzOk24q7si23ykNYZmxIo4JcmC9Uw0=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "75",
      "submitted": "2017/10/25",
      "author": "Jenny Johnston",
      "rating": "★★★★★ (5)",
      "text": "Would highly recommend David. Excellent knowledge and expertise with a lovely warm and friendly manner. After attending a number of physios over the years for ongoing   lower back pain David was able to resolve same in a short number of sessions.Many Thanks for your services David.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu3eke6PiVtYHlaRGvPE0z7mRxG5PTnL0raIM26y=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "76",
      "submitted": "2019/10/25",
      "author": "Sinead Ryan",
      "rating": "★★★★★ (5)",
      "text": "Had my first session with David this week and I could not be happier. Super nice guy to deal with and the relief I have gotten is incredible. He's completely genuine and upfront about everything and talks you through what he's doing and why. Couldn't recommend him highly enough...",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu2InY8aTNJvES3qiJljzFsZetB4yGWFh77fWLKm=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "77",
      "submitted": "2022/02/23",
      "author": "Juan van der Breggen",
      "rating": "★★★★★ (5)",
      "text": "Great physio for back and neck injuries. Treatment is done really well and the self exercises are explained properly.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu-1tF5bicSwY35dxsZRZcBQLUzXTJxsERLyQnTNrxY=s40-c-c0x00000000-cc-rp-mo-ba4-br100"
    },
    {
      "id": "78",
      "submitted": "2022/04/25",
      "author": "Hrw Gatoula",
      "rating": "★★★★★ (5)",
      "text": "Very good physiotherapy I highly recommend it  Very professional and they are helping you a lot.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu9P_4-juzQihWv451IBCetfRLdxcIWfsvZY_FzK0A=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "79",
      "submitted": "2021/05/18",
      "author": "niall jones",
      "rating": "★★★★★ (5)",
      "text": "I went to dc after been recommended from a friend, I've had back problems for a very long time, Brendan has helped me a lot by using there special equipped table used the stretch out my spine, after 6 sessions my back has improved so much, can't recommend enough",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu0tVWP7qPcghczI-W3XBzdyQZQDpBxfNqlroIIW=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "80",
      "submitted": "2019/10/25",
      "author": "Marina Marchenko",
      "rating": "★★★★★ (5)",
      "text": "I had a problem with my knee and after 3 sessions with David, my knee is back to normal. I would highly recommend David. He is the best physio and a nice person!",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu3SaMHc0S4Etw9zWL9Cz04FHJrp4uHYkU_ajxzC=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "81",
      "submitted": "2018/10/25",
      "author": "Brendan Mc Inerney",
      "rating": "★★★★★ (5)",
      "text": "I went to see David after a a sports inury and I had some very bad pain that was relentless. After 4 sessioins I was able to begin light training again. I seen multiple Physio's prior who seemed to perform the same routine to no avail. I am not one to write reviews but I needed to share my expierience",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu9Ewh5qHJ2UY1FcG52K5s4nQGRDxY9bttyfbCl-Iw=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "82",
      "submitted": "2020/10/24",
      "author": "gilly kennedy",
      "rating": "★★★★★ (5)",
      "text": "Where do I start first of all I was facing a spinal fusion and could hardly walk I went to two doctors who both said I would need surgery which I did not want to have I began to do research on google and cane across dc physiotherapy and read some of the reviews I had been to physio in the past which did not improve my pain in any way or help the pain going down my legs so why did I choose to go here well the reason was I read that they do non surgical spinal decompression and thought that is worth a try so I booked a appointment with David and I have to say it was the best decision I ever made after three treatments I could walk again without the need of a aid to hold onto I am in a far better place today than I was a year ago thanks to David anyone out there suffering with back or neck pain seriously give this ago what have you got to lose I saved myself the pain and Rehablitation of surgery you could not get a better professional service any where David is 100 percent dedicated to his job once again thanks David and keep up the good work .",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu16Jr5crd6-BvD9JK-3tAwRZ7kFIc6CLMDib4fL=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "83",
      "submitted": "2020/10/24",
      "author": "Jason Warren",
      "rating": "★★★★★ (5)",
      "text": "I went in for this physiotherapy telling myself nothing can cure the pain in my back that I've suffered with for 20 years I did my last session with Dave today and I feel absolutely incredible I can do things I never thought I'll be able to do again highly highly recommend thank you very much Dave.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu_4n-nAvSHHiMD75gKq4BFC7d3cF97_AU642NJhpC8=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "84",
      "submitted": "2020/10/24",
      "author": "Aidan Morris",
      "rating": "★★★★★ (5)",
      "text": "Daniel what a man! I was in recently for physio on my knee and Dan sorted me out within 2/3 sessions. Fantastic physio! would highly recommend.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu1tRDPQyytQ0Bf8Z924JMW_Zb2dEeTUGbAW4brM=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "85",
      "submitted": "2020/10/24",
      "author": "Mark Stamper",
      "rating": "★★★★★ (5)",
      "text": "I went to Dave with Shoulder and neck pain. Dave highlighted the areas that were the cause of discomfort and told me how to address it. Great knowledge and aftercare. Well recommended",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu15k0jC6iI69oRW4E9RM-ric4oIk8SMZ_f_rbKf=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "86",
      "submitted": "2020/10/24",
      "author": "Joyanne Partridge",
      "rating": "★★★★★ (5)",
      "text": "I suffered with alot of pain in my neck and upper back for many years and I tried everything but nothing worked until I found Brendan and this amazing treatment spinal decompression iv had 6 treatments as i was in a bad way but i can finally say I'm now pain free this treatment is amazing and Brendan is wonderful so thank you thank you thank you x",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu-V_vpvXT4awcltB2JA7I4mjYomkuHevj5A34snnXc=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "87",
      "submitted": "2020/10/24",
      "author": "Ryan Flynn",
      "rating": "★★★★★ (5)",
      "text": "Went in for my ankle, he was very polite, friendly and professional. Gave me a few exercises to do for my ankle and it now feels better and strong",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu1OVyozPRWIscMKSe6i7TlVhf35wPALfcVbUHIu=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "88",
      "submitted": "2018/10/25",
      "author": "Marc Keatinge",
      "rating": "★★★★★ (5)",
      "text": "After experiencing a painful hamstring injury, David had given me amazing simple exercises to do over the course of my injury period which helped strengthen my gluteus and my injured hamstring, the healing process was great and I feel brand new thanks David",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu0vaV67zBW8qgorSnRHECtbOysMtomt3NDoopfh=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "89",
      "submitted": "2020/10/24",
      "author": "Leon Brennan",
      "rating": "★★★★★ (5)",
      "text": "I suffered with lower back pain due to years of incorrect lifting and general wear and tear in work and  in the gym i started seeing david about 3 months ago i firstly he realigned my body and put ke through a spinal decompression session which really helped i felt like a new man .. since then ive been going back every 2 weeks for maintenance work my injuries do not affect my work or training anymore and ive had no new niggles or aches i couldnt recommend david @dcphyisotherapy more  he is very professional and passionate about what he does",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu0mm8uCt3WrrD5qHBjKbXSktYj2fzH_jTKn3iRD=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "90",
      "submitted": "2020/10/24",
      "author": "victor grundy",
      "rating": "★★★★★ (5)",
      "text": "I attended the clinic to see Dave as I was having a reoccurring hamstring issue that needed attention.Dave worked on the issue and gave me a post physio program to do to fix the problem and within a few weeks I was sorted!delighted with the service provided, got right to the point and no bulls**t with calling me back for more and more treatment which a lot do.Have since forwarded others on to his clinic.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu1cviKda5W58qGbqTGTn92Wq_S4et0nxouQA1fM=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "91",
      "submitted": "2019/10/25",
      "author": "Jennifer Tobin",
      "rating": "★★★★★ (5)",
      "text": "Dave is a super nice guy, knows his stuff! Have had issues with my neck and back and Dave has sorted these out!",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu3GWZbNtNKsrCm4S1g4Ey8buWg7IRPpOp-qfyFT=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "92",
      "submitted": "2018/10/25",
      "author": "Fawad ahmad",
      "rating": "★★★★★ (5)",
      "text": "Ok so I had a really serious pain in my back and had been a few places but didn't work , I've came across David and he actually made a real difference to my pain levels and I would recommend a visit to this very professional physiotherapist",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu1abofkP_GMTtK1RMjgi16KZqQyMdpF7rEax8nj=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "93",
      "submitted": "2021/05/18",
      "author": "Jacqueline Roe",
      "rating": "★★★★★ (5)",
      "text": "Brilliant Physiotherapist David Carpenter  always looks after clients and resolves injuries.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu0h_sLMUY5Sek8HKwE6MccNfyMARviRH527Qdja=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "94",
      "submitted": "2020/10/24",
      "author": "AEI Commercial",
      "rating": "★★★★★ (5)",
      "text": "Great service and very nice dealing with Dave. Worked on my back and glute in one session. Cheers",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu_RNbWeBsEM_KwE5dtWWp-4P_vzxBkPFy3lh96BmA=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "95",
      "submitted": "2017/10/25",
      "author": "Thomas Doran",
      "rating": "★★★★★ (5)",
      "text": "Just finished my second session with David and I couldn't be happier. Great, friendly service, I'd highly recommend him.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu8XBWVBK5imqPqdseCo-VdgErJVT08zDYryXjG3=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "96",
      "submitted": "2022/04/25",
      "author": "Ilir Haliti",
      "rating": "★★★★★ (5)",
      "text": "Definitely recommend the place.Perfect guy Eion.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu_Pu-9LcMy2O-QIc3MckWNCQwjJdHaSZlfXjTTg=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "97",
      "submitted": "2020/10/24",
      "author": "Thomas Casey",
      "rating": "★★★★★ (5)",
      "text": "Absalutly super work from David any problems I've ever had they have been worked on and mended back to 100% couldn't recommend anyone better than him 10/10",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu3ZNZESZMurLrrHJu7KgJ2_f--gmD7xWO5v3UCE=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "98",
      "submitted": "2019/10/25",
      "author": "Ciaran Bennett",
      "rating": "★★★★★ (5)",
      "text": "Best physio around, always top quality service, Daves knowledge of the anatomy is excellent.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu_QzVgbXLi0ll56wH9zIj9Nk1elRa7pZSKfsOoLMA=s40-c-c0x00000000-cc-rp-mo-ba3-br100"
    },
    {
      "id": "99",
      "submitted": "2018/10/25",
      "author": "Joe Byrne",
      "rating": "★★★★★ (5)",
      "text": "Friendly, knowledgeable and doesn't tell you to come back for a series of appointments unless you feel the need or benefits",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu1WfjNkdNr2BnQ9GyaE0uFYl2HlzJKTv3fLqZH_=s40-c-c0x00000000-cc-rp-mo-ba3-br100"
    },
    {
      "id": "100",
      "submitted": "2022/04/25",
      "author": "Thomas Melvin",
      "rating": "★★★★★ (5)",
      "text": "Great treatment and friendly staff",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu1c5nblU1PTfVQatrORV2_iQ8PmuwUmMF3uYwIS=s40-c-c0x00000000-cc-rp-mo-ba4-br100"
    },
    {
      "id": "101",
      "submitted": "2021/05/18",
      "author": "Mervyn Chapman",
      "rating": "★★★★★ (5)",
      "text": "Great treatment definite improvement after 3 sessions more to follow.",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu3DH1tDrJwMq1UX8UD0CmmKeqaSqPK-Hp2jL9hQ=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "102",
      "submitted": "2018/10/25",
      "author": "Tom Reville",
      "rating": "★★★★★ (5)",
      "text": "Had 2 sessions with Dave over a long term back problem and feeling much better",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu3YiDbwNhpp3l2pkUTMRz_mp2k4con-Vz8iLyCx=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "103",
      "submitted": "2020/10/24",
      "author": "Ben Kearney",
      "rating": "★★★★★ (5)",
      "text": "Absolute gent top quality service don't hesitate to make an appointment definitely worth your time",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a/ALm5wu3FIZ5PUSfWalYU6iXvZz974Ry6o2nto4Q7uWhP=s40-c-c0x00000000-cc-rp-mo-br100"
    },
    {
      "id": "104",
      "submitted": "2018/10/25",
      "author": "Dean Mcentee",
      "rating": "★★★★★ (5)",
      "text": "David is the best physio I have been to great service for a great price",
      "language": "en",
      "retrieved": "—",
      "img_src": "https://lh3.googleusercontent.com/a-/ACNPEu9uI6IfYjYcgiVVT2AuC5t0QAhDZZQ2Oor5slmoKh0=s40-c-c0x00000000-cc-rp-mo-ba3-br100"
    }
  ]
  `