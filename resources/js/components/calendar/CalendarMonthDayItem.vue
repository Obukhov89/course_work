<template>
  <td @click="clickItem"
      class="calendar-day"
      :class="{
      'calendar-day--not-current': !day.isCurrentMonth,
      'calendar-day--today': isToday
    }"
  >
    <span>{{ label }}</span>
  </td>
</template>

<script>
import dayjs from "dayjs";

export default {
  name: "CalendarMonthDayItem",

  props: {
    day: {
      type: Object,
      required: true
    },

    isCurrentMonth: {
      type: Boolean,
      default: false
    },

    isToday: {
      type: Boolean,
      default: false
    }
  },

  computed: {
    label() {
      return dayjs(this.day.date).format("D");
    }
  },

  methods:{
    clickItem(){
      console.log(this.label)
    }
  }
};
</script>

<style scoped>
.calendar-day {
  position: relative;
  text-align: center;
  min-height: 100px;
  font-size: 16px;
  background-color: #fff;
  color: var(--grey-800);
  padding: 5px;
  border-left: 1px solid #1f6d17;
  border-bottom: 1px solid #1f6d17;
}

.calendar-day > span {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  right: 2px;

  width: var(--day-label-size);
  height: var(--day-label-size);
}

.calendar-day--not-current {
  text-align: center;
  border-left: 1px solid #1f6d17;
  border-bottom: 1px solid #1f6d17;
  background-color: lightgray;
}

.calendar-day--today {
  position: relative;
  text-align: center;
  min-height: 100px;
  font-size: 16px;
  background-color: #fff;
  color: var(--grey-800);
  padding: 5px;
  border-left: 1px solid #1f6d17;
  border-bottom: 1px solid #1f6d17;
}

.calendar-day--today > span {
  width: 35px;
  color: #fff;
  border-radius: 15px;
  background-color:#1f6d17;
}
</style>