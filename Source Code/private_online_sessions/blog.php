<?php
include './includes/db.php';
session_start();
include './includes/header.php';
?>
    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 400px"
      >
        <h3 class="display-3 font-weight-bold text-white">Blog Detail</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Blog Detail</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Detail Start -->
    <div class="container py-5">
      <div class="row pt-5">
        <div class="col-lg-12">
          <div class="d-flex flex-column text-left mb-3">
            <p class="section-title pr-5">
              <span class="pr-2">Blog Detail Page</span>
            </p>
            <h1 class="mb-3">THE EFFECTIVENESS OF USING ONLINE VIDEO AND BLOG CONTENT IN MARKETING</h1>
            <div class="d-flex">
              <p class="mr-3"><i class="fa fa-user text-primary"></i> Admin</p>
              <p class="mr-3">
                <i class="fa fa-folder text-primary"></i> Web Design
              </p>
              <!-- <p class="mr-3"><i class="fa fa-comments text-primary"></i> 15</p> -->
            </div>
          </div>
          <div class="mb-5">
            <img
              class="img-fluid rounded w-100 mb-4"
              src="img/detail.jpg"
              alt="Image"
            />
            <p style="text-align: justify;">
              Fast-growing and evolving online content has enabled responsive curriculum 
              updates to support students’ learning of how to apply concepts to understand and solve 
              real world problems. Written case studies have long served this purpose in a wide variety of disciplines,
               and many educators have seen value in presenting cases through the use of online resources under the assumption 
               that this approach will result in positive learning outcomes. Studies designed to compare the two methods have had
                mixed results with regard to student performance. This paper shows comparison results of using case study assignments
                 presented either as traditional written descriptions or as a combination of online resources including video clips, 
                 blogs, and vlogs. Research results indicate that learning outcomes for case study assignments presented through online
                  resources improved significantly for the learners. Various types of students gained benefits differently. Higher 
                  achievers gained more than average achievers, and struggling students obtained necessary gains sufficient to pass the
                   case study assignments. Marketing educators should consider incorporating 
              modern online content in curriculum design components such as case study assignments to improve student learning.
            </p>
            <!-- <p>
              Voluptua est takimata stet invidunt sed rebum nonumy stet, clita
              aliquyam dolores vero stet consetetur elitr takimata rebum
              sanctus. Sit sed accusam stet sit nonumy kasd diam dolores,
              sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo
              sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et,
              clita lorem sit vero amet amet est dolor elitr, stet et no diam
              sit. Dolor erat justo dolore sit invidunt.
            </p> -->
            <h2 class="mb-4">5 Reasons Why Online Learning is the Future of Education in 2023            </h2>
            <img
              class="img-fluid rounded w-50 float-left mr-4 mb-3"
              src="img/blog-1.jpg"
              alt="Image"
            />
            <p style="text-align: justify;">
              The concept of traditional education has changed radically within the last couple of years. 
              Being physically present in a classroom isn’t the only learning option anymore — not 
              with the rise of the internet and new technologies, at least. Nowadays, you have access
               to a quality education whenever and wherever you want, as long as you can get online. 
               We are now entering a new era — the revolution of online education.
There’s no need to discount the skepticism surrounding education 
through the internet. It’s hard to understand the notion of leaving behind the conventional classroom, 
especially if it's to face this vast space called The Internet. 
However, that’s not reason enough
 to shy away from this alternative, which has 
 proven to be valid and useful for many students. According to the most recent survey from Babson Survey Research Group, over 30 percent of higher education students in the United States are taking at least one distance course. Online education is a sensible choice whether you’re a teenager or an adult. As a student, this can be a useful 
learning method for sharpening your skills in a difficult subject, or learning a new skill. 
            </p>
            <h3 class="mb-4">Advantages And Disadvantages Of Online Learning</h3>
            <img
              class="img-fluid rounded w-50 float-right ml-4 mb-3"
              src="img/blog-2.jpg"
              alt="Image"
            />
            <p style="text-align: justify;">
              As with most teaching methods, online learning also has its own set of positives and negatives. Decoding and understanding these positives and negatives will help institutes in creating strategies for more efficient delivery of the lessons, ensuring an uninterrupted learning journey for the students.
              Discover Everything You Need To Know (Good And Bad) About  Online Education
              One of the most oft-used terms after the pandemic is the term “new normal.” The new normal in education is the increased use of online learning tools. The COVID-19 pandemic has triggered new ways of learning. All around the world, educational institutions are looking toward online learning platforms to continue with the process of educating students. The new normal now is a transformed concept of education with online learning at the core of this transformation. Today, digital learning has emerged as a necessary resource for students and schools all over the world. For many educational institutes, this is an entirely new way of education that they have had to adopt. Online learning is now applicable not just to learn academics but it also extends to learning extracurricular activities for students as well. In recent months, the demand for online learning has risen significantly, and it will continue doing so in the future.
              
              As with most teaching methods, online learning also has its own set of positives and negatives. Decoding and understanding these positives and negatives will help institutes in creating strategies for more efficiently delivering the lessons, ensuring an uninterrupted learning journey for students.
            </p>
          </div>

          <!-- Related Post -->
          <!-- <div class="mb-5 mx-n3">
            <h2 class="mb-4 ml-3">Related Post</h2>
            <div class="owl-carousel post-carousel position-relative">
              <div
                class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3"
              >
                <img
                  class="img-fluid"
                  src="img/post-1.jpg"
                  style="width: 80px; height: 80px"
                />
                <div class="pl-3">
                  <h5 class="">Diam amet eos at no eos</h5>
                  <div class="d-flex">
                    <small class="mr-3"
                      ><i class="fa fa-user text-primary"></i> Admin</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-folder text-primary"></i> Web
                      Design</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-comments text-primary"></i> 15</small
                    >
                  </div>
                </div>
              </div>
              <div
                class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3"
              >
                <img
                  class="img-fluid"
                  src="img/post-2.jpg"
                  style="width: 80px; height: 80px"
                />
                <div class="pl-3">
                  <h5 class="">Diam amet eos at no eos</h5>
                  <div class="d-flex">
                    <small class="mr-3"
                      ><i class="fa fa-user text-primary"></i> Admin</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-folder text-primary"></i> Web
                      Design</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-comments text-primary"></i> 15</small
                    >
                  </div>
                </div>
              </div>
              <div
                class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3"
              >
                <img
                  class="img-fluid"
                  src="img/post-3.jpg"
                  style="width: 80px; height: 80px"
                />
                <div class="pl-3">
                  <h5 class="">Diam amet eos at no eos</h5>
                  <div class="d-flex">
                    <small class="mr-3"
                      ><i class="fa fa-user text-primary"></i> Admin</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-folder text-primary"></i> Web
                      Design</small
                    >
                    <small class="mr-3"
                      ><i class="fa fa-comments text-primary"></i> 15</small
                    >
                  </div>
                </div>
              </div>
            </div>
          </div> -->

          <!-- Comment List -->
          <!-- <div class="mb-5">
            <h2 class="mb-4">3 Comments</h2>
            <div class="media mb-4">
              <img
                src="img/user.jpg"
                alt="Image"
                class="img-fluid rounded-circle mr-3 mt-1"
                style="width: 45px"
              />
              <div class="media-body">
                <h6>
                  John Doe <small><i>01 Jan 2045 at 12:00pm</i></small>
                </h6>
                <p>
                  Diam amet duo labore stet elitr ea clita ipsum, tempor labore
                  accusam ipsum et no at. Kasd diam tempor rebum magna dolores
                  sed sed eirmod ipsum. Gubergren clita aliquyam consetetur
                  sadipscing, at tempor amet ipsum diam tempor consetetur at
                  sit.
                </p>
                <button class="btn btn-sm btn-light">Reply</button>
              </div>
            </div>
            <div class="media mb-4">
              <img
                src="img/user.jpg"
                alt="Image"
                class="img-fluid rounded-circle mr-3 mt-1"
                style="width: 45px"
              />
              <div class="media-body">
                <h6>
                  John Doe <small><i>01 Jan 2045 at 12:00pm</i></small>
                </h6>
                <p>
                  Diam amet duo labore stet elitr ea clita ipsum, tempor labore
                  accusam ipsum et no at. Kasd diam tempor rebum magna dolores
                  sed sed eirmod ipsum. Gubergren clita aliquyam consetetur
                  sadipscing, at tempor amet ipsum diam tempor consetetur at
                  sit.
                </p>
                <button class="btn btn-sm btn-light">Reply</button>
                <div class="media mt-4">
                  <img
                    src="img/user.jpg"
                    alt="Image"
                    class="img-fluid rounded-circle mr-3 mt-1"
                    style="width: 45px"
                  />
                  <div class="media-body">
                    <h6>
                      John Doe <small><i>01 Jan 2045 at 12:00pm</i></small>
                    </h6>
                    <p>
                      Diam amet duo labore stet elitr ea clita ipsum, tempor
                      labore accusam ipsum et no at. Kasd diam tempor rebum
                      magna dolores sed sed eirmod ipsum. Gubergren clita
                      aliquyam consetetur, at tempor amet ipsum diam tempor at
                      sit.
                    </p>
                    <button class="btn btn-sm btn-light">Reply</button>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

          <!-- Comment Form -->
          <!-- <div class="bg-light p-5">
            <h2 class="mb-4">Leave a comment</h2>
            <form>
              <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name" />
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email" />
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website" />
              </div>

              <div class="form-group">
                <label for="message">Message *</label>
                <textarea
                  id="message"
                  cols="30"
                  rows="5"
                  class="form-control"
                ></textarea>
              </div>
              <div class="form-group mb-0">
                <input
                  type="submit"
                  value="Leave Comment"
                  class="btn btn-primary px-3"
                />
              </div>
            </form>
          </div>
        </div>

        <div class="col-lg-4 mt-5 mt-lg-0"> -->
          <!-- Author Bio -->
          <!-- <div
            class="d-flex flex-column text-center bg-primary rounded mb-5 py-5 px-4"
          >
            <img
              src="img/user.jpg"
              class="img-fluid rounded-circle mx-auto mb-3"
              style="width: 100px"
            />
            <h3 class="text-secondary mb-3">John Doe</h3>
            <p class="text-white m-0">
              Conset elitr erat vero dolor ipsum et diam, eos dolor lorem ipsum,
              ipsum ipsum sit no ut est. Guber ea ipsum erat kasd amet est elitr
              ea sit.
            </p>
          </div> -->

          <!-- Search Form -->
          <!-- <div class="mb-5">
            <form action="">
              <div class="input-group">
                <input
                  type="text"
                  class="form-control form-control-lg"
                  placeholder="Keyword"
                />
                <div class="input-group-append">
                  <span class="input-group-text bg-transparent text-primary"
                    ><i class="fa fa-search"></i
                  ></span>
                </div>
              </div>
            </form>
          </div> -->

          <!-- Category List -->
          <!-- <div class="mb-5">
            <h2 class="mb-4">Categories</h2>
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center px-0"
              >
                <a href="">Web Design</a>
                <span class="badge badge-primary badge-pill">150</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center px-0"
              >
                <a href="">Web Development</a>
                <span class="badge badge-primary badge-pill">131</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center px-0"
              >
                <a href="">Online Marketing</a>
                <span class="badge badge-primary badge-pill">78</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center px-0"
              >
                <a href="">Keyword Research</a>
                <span class="badge badge-primary badge-pill">56</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center px-0"
              >
                <a href="">Email Marketing</a>
                <span class="badge badge-primary badge-pill">98</span>
              </li>
            </ul>
          </div> -->

          <!-- Single Image -->
          <!-- <div class="mb-5">
            <img src="img/blog-1.jpg" alt="" class="img-fluid rounded" />
          </div> -->

          <!-- Recent Post -->
          <!-- <div class="mb-5">
            <h2 class="mb-4">Recent Post</h2>
            <div
              class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3"
            >
              <img
                class="img-fluid"
                src="img/post-1.jpg"
                style="width: 80px; height: 80px"
              />
              <div class="pl-3">
                <h5 class="">Diam amet eos at no eos</h5>
                <div class="d-flex">
                  <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Web Design</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-comments text-primary"></i> 15</small
                  >
                </div>
              </div>
            </div>
            <div
              class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3"
            >
              <img
                class="img-fluid"
                src="img/post-2.jpg"
                style="width: 80px; height: 80px"
              />
              <div class="pl-3">
                <h5 class="">Diam amet eos at no eos</h5>
                <div class="d-flex">
                  <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Web Design</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-comments text-primary"></i> 15</small
                  >
                </div>
              </div>
            </div>
            <div
              class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mb-3"
            >
              <img
                class="img-fluid"
                src="img/post-3.jpg"
                style="width: 80px; height: 80px"
              />
              <div class="pl-3">
                <h5 class="">Diam amet eos at no eos</h5>
                <div class="d-flex">
                  <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i> Admin</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> Web Design</small
                  >
                  <small class="mr-3"
                    ><i class="fa fa-comments text-primary"></i> 15</small
                  >
                </div>
              </div>
            </div>
          </div> -->

          <!-- Single Image -->
          <!-- <div class="mb-5">
            <img src="img/blog-2.jpg" alt="" class="img-fluid rounded" />
          </div> -->

          <!-- Tag Cloud -->
          <!-- <div class="mb-5">
            <h2 class="mb-4">Tag Cloud</h2>
            <div class="d-flex flex-wrap m-n1">
              <a href="" class="btn btn-outline-primary m-1">Design</a>
              <a href="" class="btn btn-outline-primary m-1">Development</a>
              <a href="" class="btn btn-outline-primary m-1">Marketing</a>
              <a href="" class="btn btn-outline-primary m-1">SEO</a>
              <a href="" class="btn btn-outline-primary m-1">Writing</a>
              <a href="" class="btn btn-outline-primary m-1">Consulting</a>
            </div>
          </div> -->

          <!-- Single Image -->
          <!-- <div class="mb-5">
            <img src="img/blog-3.jpg" alt="" class="img-fluid rounded" />
          </div> -->

          <!-- Plain Text -->
          <!-- <div>
            <h2 class="mb-4">Plain Text</h2>
            Aliquyam sed lorem stet diam dolor sed ut sit. Ut sanctus erat ea
            est aliquyam dolor et. Et no consetetur eos labore ea erat voluptua
            et. Et aliquyam dolore sed erat. Magna sanctus sed eos tempor rebum
            dolor, tempor takimata clita sit et elitr ut eirmod.
          </div>
        </div>
      </div>
    </div> -->
    <!-- Detail End -->

        </div></div></div>
<?php
    include './includes/footer.php';
    ?>