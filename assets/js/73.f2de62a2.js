(window.webpackJsonp=window.webpackJsonp||[]).push([[73],{1504:function(e,t,o){"use strict";o.r(t);var a=o(31),s=Object(a.a)({},(function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("ContentSlotsDistributor",{attrs:{"slot-key":e.$parent.slotKey}},[a("h1",{attrs:{id:"workflow"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#workflow"}},[e._v("#")]),e._v(" Workflow")]),e._v(" "),a("p",[e._v("A workflow can be considered as a backend flow where you can automate tasks such as adding or removing tags, set custom field variables, do external API calls.")]),e._v(" "),a("p",[e._v("This way the conversation you have with the subscriber will not be affected by needing to wait to apply all those actions and the experience is as smooth as possible for that end-user.")]),e._v(" "),a("h2",{attrs:{id:"create-workflow"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#create-workflow"}},[e._v("#")]),e._v(" Create Workflow")]),e._v(" "),a("p",[e._v("To create a workflow just go to the flow overview by selecting "),a("strong",[e._v("Flows")]),e._v(" from the left-hand menu.")]),e._v(" "),a("p",[e._v("Then press the button "),a("strong",[e._v("+ New Sub Flow")])]),e._v(" "),a("p",[a("img",{attrs:{src:o(803),alt:"title"}})]),e._v(" "),a("p",[e._v("Select the workflow flow type then give it a name. Once done press the button Create to start creating your workflow.")]),e._v(" "),a("p",[e._v("Once you create your flow and you end up in the flow builder you will notice that you will have access to fewer blocks than when selecting a regular or function flow.")]),e._v(" "),a("p",[e._v("Available blocks are:")]),e._v(" "),a("ul",[a("li",[e._v("Action")]),e._v(" "),a("li",[e._v("Condition")]),e._v(" "),a("li",[e._v("Split")]),e._v(" "),a("li",[e._v("Send Email")])]),e._v(" "),a("p",[e._v("As mentioned this flow is meant to create a backend flow that you can trigger from any other flow inside your chatbot to handle system tasks like adding tags, set custom fields, but also sending emails.")]),e._v(" "),a("p",[a("img",{attrs:{src:o(804),alt:"title"}})]),e._v(" "),a("h2",{attrs:{id:"workflow-example"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#workflow-example"}},[e._v("#")]),e._v(" Workflow Example")]),e._v(" "),a("p",[e._v("Let’s take an example of how a workflow can be used.")]),e._v(" "),a("p",[e._v("A user signs up with an email and or phone number and you want to sync this information with your CRM platform of choice.")]),e._v(" "),a("p",[e._v("So soon as you grabbed the credentials from the user you can make an API call using the external request block inside of the action module.")]),e._v(" "),a("p",[e._v("You would also want to tag the user inside the chatbot for completing the onboarding step. After done we send an email notification to an admin that a new lead has been created to follow up on.")]),e._v(" "),a("p",[e._v("A workflow can then look something like this;")]),e._v(" "),a("p",[a("img",{attrs:{src:o(805),alt:"title"}})]),e._v(" "),a("p",[e._v("If you were to incorporate this into the flow that has the actual conversation it might become an issue as the conversation could be on hold for several seconds or more to finish all these system processes. And you might lose the user as he or she thinks the conversation is done.")]),e._v(" "),a("h2",{attrs:{id:"trigger-workflow"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#trigger-workflow"}},[e._v("#")]),e._v(" Trigger Workflow")]),e._v(" "),a("p",[e._v("It is very simple to trigger the above workflow inside of any other flow that you build.")]),e._v(" "),a("p",[e._v("Just insert an action block, go to "),a("em",[e._v("advanced actions")]),e._v(", then choose "),a("em",[e._v("trigger workflow")]),e._v(" at the bottom")]),e._v(" "),a("p",[a("img",{attrs:{src:o(806),alt:"title"}})]),e._v(" "),a("p",[e._v("You can then select any workflow you created. This workflow will then be processed in the backend while the conversation with the user will not be affected and continue without any delay.")])])}),[],!1,null,null,null);t.default=s.exports},803:function(e,t,o){e.exports=o.p+"assets/img/workflow1.28383c5a.png"},804:function(e,t,o){e.exports=o.p+"assets/img/workflow2.deebfc26.png"},805:function(e,t,o){e.exports=o.p+"assets/img/workflow3.7ac2b256.png"},806:function(e,t,o){e.exports=o.p+"assets/img/workflow4.6a951507.png"}}]);